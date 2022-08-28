pipeline {
   agent any
   stages {
      stage('Say Hello') {
         steps {
            echo 'Hello World!'
         }
         steps {
            echo 'This is Third stage'
         }
         steps {
            echo 'This is Fourth stage'
         }
      } 
   }
}