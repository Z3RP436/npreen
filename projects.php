<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include('misc.php'); ?>
  </head>
  <body>
    <?php include('topbar.php'); ?>
    
    <div id="main-content">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php 
                        require_once(__DIR__ . '/php_files/ProjectController.php');
                        require_once(__DIR__. '/php_files/GithubProject.php');
                        $controller = new ProjectController();
                        $projects = $controller->getProjects();

                        foreach($projects as $project){
                            echo '<div class="col-md-4">';
                            echo '<div class="card mb-4 shadow-sm">';
                            echo '<div class="card-thumbnail">';
                            echo '<h1>'.$project->getTitle().'</h1>';
                            echo '</div>';

                            echo '<div class="card-body">';
                            echo '<p class="card-text">'. $project->getText() . '</p>';
                            if($project instanceof GithubProject){
                                $owner = $project->getOwner();
                                $repo = $project->getRepo();
                                
                                $client = new GitHubClient();
                                $commits = $client->repos->commits->listCommitsOnRepository($owner, $repo);
                                echo '<div class="d-flex justify-content-between align-items-center">';
                                echo '<small class="text-muted">Last commit-message: '.$commits[0]->getCommit()->getMessage().'</small>';
                                echo '</div>';
                            
                                echo '<div class="d-flex justify-content-between align-items-center">';
                                echo '<div class="btn-group">';
                                echo '<button type="button" class="btn btn-sm btn-outline-secondary" onclick=" window.open(\''.'https://github.com//'.$project->getOwner().'//'.$project->getRepo().'\',\'_blank\')">Github</button>';
                                echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

