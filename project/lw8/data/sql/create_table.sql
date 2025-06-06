CREATE DATABASE blog;

USE blog;

CREATE TABLE
    post (
        id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        posted_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        content VARCHAR(512),
        likes INT UNSIGNED DEFAULT NULL
    );

CREATE TABLE
    user (
        user_id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        email VARCHAR(255),
        password VARCHAR(80),
        name VARCHAR(100),
        profile_avatar VARCHAR(255),
        about_me VARCHAR(200)
    );

CREATE TABLE
    image (
        image_id INT UNSIGNED AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
        post_id INT UNSIGNED NOT NULL,
        image VARCHAR(255)
    );