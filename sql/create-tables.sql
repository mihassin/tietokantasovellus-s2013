CREATE TABLE product_types (
  id serial PRIMARY KEY,
  description varchar(30) NOT NULL
);

CREATE TABLE products (
  id serial PRIMARY KEY,
  product_type_id int REFERENCES product_types(id) ON DELETE CASCADE,
  name varchar(30) NOT NULL,
  description varchar(255),
  price real
);

CREATE TABLE role_types (
  id serial PRIMARY KEY,
  description varchar(30) NOT NULL
);

CREATE TABLE users (
  id serial PRIMARY KEY,
  role_type_id int REFERENCES role_types(id) ON DELETE CASCADE,
  first varchar(30) NOT NULL,
  second varchar(30) NOT NULL,
  email varchar(255) NOT NULL,
  phone varchar(255) NOT NULL,
  pw_hash text,
  pw_salt text
);

CREATE TABLE orders (
  id serial PRIMARY KEY,
  user_id int REFERENCES users(id) ON DELETE CASCADE,
  address varchar(255) NOT NULL,
  order_time timestamp NOT NULL,
  delivered boolean NOT NULL,
  total_price real
);

CREATE TABLE materials (
  id serial PRIMARY KEY,
  product_type_id int REFERENCES product_types(id) ON DELETE CASCADE,
  description varchar(30) NOT NULL,
  price real
);

CREATE TABLE cart_map (
  id serial PRIMARY KEY,
  user_id int REFERENCES users(id) ON DELETE CASCADE,
  product_id int REFERENCES products(id) ON DELETE CASCADE,
  amount int NOT NULL,
  ordered boolean NOT NULL,
  added_mats varchar(255),
  mats boolean NOT NULL,
  price real  
);
