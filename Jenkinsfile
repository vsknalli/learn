node{
    stage('SCM checkout'){
        git 'https://github.com/vsknalli/secound-app.git'
    }
    stage('Compile-Package'){
        sh 'mvn package'
    }
}