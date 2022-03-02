<html>
<body>

# This is a basic workflow to help you get started with Actions<BR>
<BR>
name: CI<BR>
<BR>
# Controls when the workflow will run<BR>
on:<BR>
&nbsp;&nbsp;workflow_dispatch:<BR>
<BR>
env:<BR>
&nbsp;&nbsp;ASSET_ID: <?php echo $_POST["asset_id"]; ?><BR>
&nbsp;&nbsp;VERSION: <?php echo $_POST["version"]; ?><BR>
&nbsp;&nbsp;SERVICE_NAME: <?php echo $_POST["service_name"]; ?><BR>
&nbsp;&nbsp;ENVIRONMENT: <?php echo $_POST["environment"]; ?><BR>
&nbsp;&nbsp;DOCKER_EXTRA: <?php echo $_POST["docker_extra"]; ?><BR>
&nbsp;&nbsp;DOCKER_IMAGE_VERSION: <?php echo $_POST["docker_image_version"]; ?><BR>
<BR>
jobs:<BR>
&nbsp;&nbsp;# This workflow contains a single job called "build"<BR>
&nbsp;&nbsp;build:<BR>
&nbsp;&nbsp;&nbsp;&nbsp;# The type of runner that the job will run on<BR>
&nbsp;&nbsp;&nbsp;&nbsp;runs-on: ubuntu-latest<BR>
<BR>
&nbsp;&nbsp;&nbsp;&nbsp;# Steps represent a sequence of tasks that will be executed as part of the job<BR>
&nbsp;&nbsp;&nbsp;&nbsp;steps:<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Checks-out your repository under $GITHUB_WORKSPACE, so your job can access it<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- uses: actions/checkout@v2<BR>
<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Runs a set of commands using the runners shell<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- name: Run a multi-line script<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run: |<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo Add other actions to build,<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo test, and deploy your project.<BR>
<BR>

</body>
</html>
