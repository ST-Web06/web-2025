CREATE DATABASE blog;

USE blog;

CREATE TABLE
    post (
        user_id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        posted_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        content VARCHAR(511),
        likes INT UNSIGNED DEFAULT NULL
    );

CREATE TABLE
    user (
        user_id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        email VARCHAR(255),
        password VARCHAR(63),
        name VARCHAR(127),
        profile_avatar VARCHAR(255),
        about_me VARCHAR(255)
    );

CREATE TABLE
    image (
        image_id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        post_id INT UNSIGNED NOT NULL,
        image VARCHAR(255)
    );