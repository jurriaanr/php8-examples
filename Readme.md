Make sure show is executable

    chmod +x bin/show.sh

Build the image

    docker build --tag php8-test:1.0 .

Run:

    docker-compose up -d

Go to container:

    docker-console

or

    docker exec -it php-8-test bash

Run:

    show *example*

F.e.

    show attributes

The show command has autocompletion on the names of the example. If you add new example folders, you need to login again on the console and the new examples will be auto completed as well. 
