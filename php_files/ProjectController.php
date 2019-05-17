<?php
require_once(__DIR__.'/../resources/libs/github-php/client/GitHubClient.php');
require_once(__DIR__.'/GithubProject.php');
require_once(__DIR__.'/Project.php');
    class ProjectController {
        private $projects;

        public function __construct(){
            $index = 0;
            $this->projects = [
                ++$index => new GithubProject("Neural Network","A libary to create small Networks.","z3rp436","neuralnetwork"),
                ++$index => new GithubProject("Chart-Libary","A libary to create small Line-Charts.","z3rp436","chart"),
                ++$index => new GithubProject("Standford-Dogs","A Neural Network project that is using my own libary to recognize dogs in a picture. I'm a stanford database with round 100.000 pictures of dogs.","z3rp436","stanfordDogs"),
                ++$index => new GithubProject("HKI","A school project where we tried to build up a neural netork that recognize handwritten digits.","z3rp436","hki"),
                ++$index => new GithubProject("Website","This website is currently a Project","z3rp436","npreen")
            ];
        }

        

        /**
         * Get the value of projects
         */ 
        public function getProjects()
        {
            return $this->projects;
        }
    }
?>