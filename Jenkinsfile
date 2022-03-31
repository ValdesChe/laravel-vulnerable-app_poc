pipeline {
    agent { dockerfile true }
    stages {
        stage('Build') {
            node {
                checkout scm
            }
            steps {
                sh 'docker-compose build'
                sh 'docker-compose up -d'
                sh 'composer install'
                sh 'npm install'
                sh 'npm run dev'
                sh 'docker exec eaurp-app php /app/artisan migrate:fresh --seed'
            }
        }
        stage('Test') {
            steps {
                sh 'echo 1'
            }
        }
    }
}