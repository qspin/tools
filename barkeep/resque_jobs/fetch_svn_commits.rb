require "bundler/setup"
require "pathological"
require "timeout"
require "lib/script_environment"
require "lib/resque_job_helper"

class FetchSvnCommits
  include ResqueJobHelper
  @queue = :fetch_svn_commits

  # We're willing to spend up to 10 minutes to rebase a repo. This can be necessary for giant repos or
  # when fetching changes over a slow network connection.
  FETCH_TIMEOUT = 10 * 60

  def self.perform
    setup

    Dir.foreach(REPOS_SVN_ROOT) do |repo|
      next if repo == '.' or repo == '..' or repo == '.git'
      repo_path = File.join(REPOS_SVN_ROOT, repo)
      if File.directory?(repo_path)
        begin
          logger.info "Started fetching commits on SVN repo #{repo} - doing svn2git rebase"
          Timeout::timeout(FETCH_TIMEOUT) do
            run_shell("cd '#{repo_path}' && svn2git --rebase")
          end
          logger.info "Finished fetching commits on SVN repo #{repo}"
        rescue Timeout::Error => error
          logger.error "Timed out while trying to rebase '#{repo}'"
        rescue StandardError => error
          logger.error "Unable to rebase the repo #{repo}"
        end
      end
    end
  end
end
