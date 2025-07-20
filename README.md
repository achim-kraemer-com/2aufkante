# 2aufKante - Band Website

This is the official website for the punk rock band 2aufKante. It's an open-source project built with Symfony, providing information about the band, their music, and upcoming shows.

## Features

*   **Band Information:** Learn more about the band members and their story.
*   **Music:** Listen to their latest tracks.
*   **Live Dates:** Find out about upcoming shows and events.
*   **Contact:** Get in touch with the band.

## Tech Stack

*   **Backend:** Symfony
*   **Frontend:** Twig, Webpack Encore, SCSS
*   **Database:** MySQL
*   **Development Environment:** Docker

## Getting Started

### Prerequisites

*   Docker
*   Docker Compose

### Installation

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/achim-kraemer-com/2aufkante.git
    cd 2aufKante
    ```

2.  **Set up the environment:**

    Navigate to the `docker` directory and create a `.env` file from the provided `.env.dist` file. Adjust the variables if needed.

    ```bash
    cd docker
    cp .env.dist .env
    ```

3.  **Build and start the Docker containers:**

    ```bash
    docker-compose up -d
    ```

4.  **Install dependencies:**

    Access the `apache` container and install the Composer and Yarn dependencies.

    ```bash
    docker-compose exec apache bash
    composer install
    yarn install
    ```

5.  **Set up the database:**

    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

6.  **Build the frontend assets:**

    ```bash
    yarn encore dev
    ```

7.  **Access the application:**

    You can now access the website at [http://localhost](http://localhost).

## Contributing

We welcome contributions to the project! Please feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
