<?php
    Class Article {
        private $error = "";

        // update --- get all articles ---
        public function getArticles(){
            $query = "SELECT * FROM articles ORDER BY DatePosted DESC";
            $DB = new database();
            $result = $DB->read($query);
            if (!empty($result)) {
                return $result;
            } else {
                return false;
            }
        }

        // update --- get article by id ---
        public function getArticlesById($id){
            $query = "SELECT * FROM articles WHERE ArticleID = '$id' ORDER BY DatePosted DESC";
            $DB = new database();
            $result = $DB->read($query);
            if (!empty($result)) {
                return $result[0];
            } else {
                return false;
            }
        }
    }
?>