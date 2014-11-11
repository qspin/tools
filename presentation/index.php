<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Qgile - improving software quality</title>
    
    <meta name="description" content="Qgile - improving software quality" />
    <meta name="author" content="Ryheul Kristof" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="./impress.css" rel="stylesheet" />
</head>

<body class="impress-not-supported">
<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div id="impress">
    <div id="Qgile" class="step slide" data-x="-1000" data-y="-1500">
        <img src="./QSpin_color.jpg" alt="QSpin" title="QSpin" style="width:750px;" />
        <q>Qgile - improving software quality</q>
    </div>

    <div id="SDLC" class="step slide" data-x="0" data-y="-1500">
        <q><strong>SDLC</strong> - Software Development Life-Cycle</q>
        <img src="agile101-software-dev.gif" style="position: absolute; margin-left: 500px; margin-top: 40px;"/>
        <ul>
            <li>Agile methodologies...</li>
            <li>Scrum</li>
            <li>XP <span class="small">(eXtreme Programming)</span></li>
            <li>Kanban</li>
            <li>Lean</li>
            <li>Crystal</li>
            <li>FDD <span class="small">(Feature Driven Development)</span></li>
            <li>DSDM <span class="small">(Dynamic Systems Development Method)</span></li>
        </ul>
        <div class="comment">These practices all help teams work better together! None of these are the best choice, select one and adapt to your team, in the past I have used methods from different standards…</div>
    </div>

    <div id="agile" class="step slide" data-x="1000" data-y="-1500">
        <q><strong>Agile</strong> - pros and cons</q>
        <ul>
            <li>Frequent delivery of working software <span class="small">(reduce time-to-market)</span></li>
            <li>Close customer collaboration</li>
            <li>Respond quickly to change <span class="small">(changing requirements)</span></li>
            <li>Higher productivity & quality</li>
            <li>Cross functional team <span class="small">(self-organizing)</span></li>
            <li>Good for small teams <span class="small">(up to 10 people)</span></li>
        </ul>
        <ul style="margin-top: 50px;">
            <li>Hard to predict timelines</li>
            <li>Time consuming</li>
            <li>Budget <span class="small">(hard to put a fixed price)</span></li>
            <li>Less documentation</li>
        </ul>
    </div>
    
    <div id="key" class="step slide" data-x="0" data-y="-700">
        <q>Some key practices in Agile</q>
        <ul style="position: absolute;">
            <li>Collective code ownership</li>
            <li>User story design</li>
            <li>Personas</li>
            <li>Continuous integration</li>
            <li>Refactoring</li>
            <li>Test-Driven development</li>
            <li>Pair programming <span class="small">(peer review)</span></li>
            <li>Customer acceptance testing</li>
            <li>Small releases</li>
            <li>Coding standards</li>
        </ul>
        <ul style="position: absolute; margin-left: 400px;">
            <li>Workflow <span class="small">(visual scrumboard)</span></li>
            <li>Limit WIP <span class="small">(work in progress limit)</span></li>
            <li>Code review & inspection</li>
            <li>Code quality</li>
            <li>Code productivity</li>
            <li>MoSCoW rule <span class="small">(Must, Should, Could, Won’t)</span></li>
            <li>Regular & fast building</li>
            <li>Configuration management</li>
            <li>Developing by feature</li>
            <li>Documentation</li>
            <li>Demo's</li>
        </ul>
    </div>

    <div id="manifesto" class="step slide" data-x="0" data-y="100">
        <q>Agile manifesto - a statement of values</q>
        <img src="agile_manifesto.png" style="margin-left: 80px; width: 620px;"/>
    </div>
    
    <div id="methodology" class="step slide" data-x="1000" data-y="100">
        <img src="ATSC_AgileDevMethodology_V3.png" style="margin-left: 80px; width: 620px;"/>
    </div>
    
    <div id="scrum" class="step slide" data-x="2000" data-y="100">
        <img src="Scrum.jpg" style="margin-left: -40px; width: 860px; margin-top: 30px;"/>
    </div>
    
    <div id="xp" class="step slide" data-x="3000" data-y="100">
        <img src="project.gif" style="margin-left: -40px; width: 860px; margin-top: 120px;"/>
    </div>

    <div id="tools" class="step slide" data-x="0" data-y="900">
        <q>Typical selection of tools</q>
        <ul style="position: absolute;">
            <li>SCM <span class="small">(source control management)</span></li>
            <li>Development language</li>
            <li>Unit testing framework</li>
            <li>IDE <span class="small">(integrated development environment)</span></li>
            <li>Issue management</li>
            <li>Code analyse & quality</li>
            <li>Continuous integration</li>
            <li>Code review</li>
        </ul>
        <ul style="position: absolute; margin-left: 400px;">
            <li>Release notes & changes</li>
            <li>Documentation & management</li>
            <li>Team collaboration</li>
            <li>Database</li>
            <li>Story writing <span class="small">(requirements gathering)</span></li>
            <li>Acceptance test criteria</li>
            <li>Personas</li>
        </ul>
        <div class="comment" style="position: absolute; margin-top:500px;">A lot of tools and practices need to be selected (none is the best), but search what is the <strong>best fit</strong> for the software project</div>
    </div>

    <div id="scm_title" class="step slide" data-x="1000" data-y="900">
        <q>SCM</q>
    </div>
    
    <div id="unit_title" class="step slide" data-x="2000" data-y="900">
        <q>Unit testing (TDD)</q>
    </div>
    
    <div id="codereview_title" class="step slide" data-x="3000" data-y="900">
        <q><b>code</b> <span class="thoughts">review</span></q>
    </div>

    <div id="codereview" class="step slide" data-x="3000" data-y="1800" data-rotate="90">
        <q>Code review</q>
        <ul style="position: absolute; width: 400px;">
            <li>Share knowledge & experience</li>
            <li>Learning about the code base</li>
            <li>Finding bugs</li>
            <li>Mentoring by senior developers</li>
            <li>Examine and improve design</li>
            <li>Team discussions</li>
            <li>Higher code quality</li>
        </ul>
        <ul style="position: absolute; margin-left: 440px;">
            <li>Approve or reject changes</li>
            <li>Ensuring code standards & guidelines</li>
            <li>Maintainability <span class="small">(poor programming practices e.g. copy paste)</span></li>
            <li>Check unit tests</li>
            <li>Find areas of improvement</li>
            <li>Verify requirements</li>
            <li>Reduce complexity</li>
        </ul>
    </div>
    
    <div id="codereview_features" class="step slide" data-x="3000" data-y="2800" data-rotate="90">
        <q>Code review features</q>
        <ul style="position: absolute; width: 400px;">
            <li>easy to use</li>
            <li>understandable</li>
            <li>user friendly</li>
            <li>simple user interface</li>
            <li>fast</li>
            <li>adding comment <span class="small">(inline code snippets)</span></li>
            <li>approve or reject changes</li>
        </ul>
        <ul style="position: absolute; margin-left: 440px;">
            <li>see differences between commits</li>
            <li>multiple repositories</li>
            <li>compare revisions</li>
            <li>request review <span class="small">(by mail)</span></li>
            <li>see statistics</li>
            <li>easily adapt the tool</li>
            <li>integration in other tools <span class="small">(e.g. Continuous integration, issue management, …)</span></li>
        </ul>
    </div>
    
    <div id="codereview_tools" class="step slide" data-x="3000" data-y="3800" data-rotate="90">
        <q>Code review tools</q>
        <ul style="position: absolute; width: 400px;">
            <li>Phabricator</li>
            <li>Gerrit</li>
            <li>Review board</li>
            <li>Rietvield</li>
            <li>Barkeep</li>
            <li>Upsource <span class="small">(jetbrains)</span></li>
            <li>Crucible <span class="small">(atlassian)</span></li>
        </ul>
        <div class="comment" style="position: absolute; margin-top:500px;">Based on the features a code review should have I selected Barkeep as a tool for doing code review, it is also easy to adapt (open source - ruby)</div>
    </div>
    
    <div id="release_title" class="step slide" data-x="4000" data-y="900">
        <q>Release notes and changes</q>
    </div>
    
    <div id="documentation_title" class="step slide" data-x="5000" data-y="900">
        <q>Documentation and management</q>
    </div>

    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>
</div>

<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>

<script src="./impress.js"></script>
<script>impress().init();</script>

</body>
</html>
