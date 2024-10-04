A simple ways for me to keep track of what's happening with my plants.  This project is built on this docker image: https://github.com/TrafeX/docker-php-nginx

## Usage

Build the image:
    docker build ~/plantlog/

Start the Docker container:

    docker run -p 80:8080 plantlog
