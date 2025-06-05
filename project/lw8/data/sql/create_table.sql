CREATE DATABASE blog

USE blog

CREATE TABLE
    post (
        id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        posted_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        content TEXT,
        likes INT UNSIGNED DEFAULT NULL
    );

CREATE TABLE
    user (
        id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        email VARCHAR(255),
        password MEDIUMTEXT,
        name VARCHAR(255),
        profile_avatar VARCHAR(255),
        about_me TEXT
    );

CREATE TABLE
    image (
        post_id INT UNSIGNED NOT NULL,
        image VARCHAR(255),
        PRIMARY KEY (post_id)
    );