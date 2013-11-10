CREATE TABLE product_types (
  id serial PRIMARY KEY,
  description varchar(30) NOT NULL
);

CREATE TABLE products (
  id serial PRIMARY KEY,
  product_type_id int REFERENCES product_types(id) ON DELETE CASCADE,
  name varchar(30) NOT NULL,
  description varchar(255),
  price decimal(6,2)
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
  phone varchar(255) NOT NULL
);

CREATE TABLE orders (
  id serial PRIMARY KEY,
  user_id int REFERENCES users(id) ON DELETE CASCADE,
  address varchar(255) NOT NULL,
  deliver_time date NOT NULL,
  total_price decimal(6,2)
);

CREATE TABLE materials (
  id serial PRIMARY KEY,
  product_type_id int REFERENCES product_types(id) ON DELETE CASCADE,
  description varchar(30) NOT NULL,
  price decimal(6,2)
);

CREATE TABLE content_map (
  id serial PRIMARY KEY,
  product_id int REFERENCES products(id) ON DELETE CASCADE,
  material_id int REFERENCES materials(id) ON DELETE CASCADE,
  UNIQUE(product_id, material_id)
);

CREATE TABLE cart_map (
  id serial PRIMARY KEY,
  order_id int REFERENCES orders(id) ON DELETE CASCADE,
  product_id int REFERENCES products(id) ON DELETE CASCADE,
  amount int NOT NULL,
  UNIQUE(order_id, product_id)
);