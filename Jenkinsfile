pipeline {
    agent none
    // agent { dockerfile true }
    stages {
        stage('Build') {
            agent any
            steps {
                sh 'docker-compose build'
                sh 'docker-compose up -d'
                // sh 'composer update'
                sh 'composer install --ignore-platform-reqs'
                sh 'npm install'
                sh 'npm run dev'
                sh 'docker exec eaurp-app php /app/artisan migrate:fresh --seed'
            }
        }
        stage('Test') {
            agent { dockerfile true }
            steps {
                sh 'echo 1'
            }
        }
    }
}