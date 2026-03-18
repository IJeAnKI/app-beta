app_beta=# CREATE TABLE users (
    id SERIAL PRIMARY KEY, 
    firstname VARCHAR(50) NOT NULL, 
    lastname VARCHAR(50) NOT NULL, 
    email VARCHAR(100) UNIQUE NOT NULL, 
    password TEXT NOT NULL, 
    mobile_phone VARCHAR(20) UNIQUE NOT NULL, 
    address VARCHAR(100), 
    gender INTEGER, 
    birthday DATE, 
    status BOOLEAN NOT NULL DEFAULT TRUE, 
    created_at TIMESTAMPTZ NOT NULL DEFAULT NOW(), 
    updated_at TIMESTAMPTZ NOT NULL DEFAULT NOW(), 
    deleted_at TIMESTAMPTZ
);