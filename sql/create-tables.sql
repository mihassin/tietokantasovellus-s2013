CREATE TABLE product_type (
  id serial PRIMARY KEY,
  description varchar(30) NOT NULL
);

CREATE TABLE product (
  id serial PRIMARY KEY,
  product_type_id int REFERENCES product_type(id) ON DELETE CASCADE,
  name varchar(30) NOT NULL,
  description varchar(255),
  price decimal(6,2)
);

CREATE TABLE role_type (
  id serial PRIMARY KEY,
  description varchar(30) NOT NULL
);

CREATE TABLE user (
  id serial PRIMARY KEY,
  role_type_id int REFERENCES role_type(id) ON DELETE CASCADE,
  first varchar(30) NOT NULL,
  second varchar(30) NOT NULL,
  e-mail varchar(255) NOT NULL,
  phone varchar(255) NOT NULL
);

CREATE TABLE order (
  id serial PRIMARY KEY,
  user_id int REFERENCES user(id) ON DELETE CASCADE,
  address varchar(255) NOT NULL,
  deliver_time date NOT NULL,
  total_price decimal(6,2)
);

CREATE TABLE material (
  id serial PRIMARY KEY,
  product_type_id int REFERENCES product_type(id) ON DELETE CASCADE,
  description varchar(30) NOT NULL,
  price decimal(6,2)
);

CREATE TABLE content (
  id serial PRIMARY KEY,
  product_id int REFERENCES product(id) ON DELETE CASCADE,
  material_id int REFERENCES material(id) ON DELETE CASCADE,
  UNIQUE(product_id, material_id)
);

CREATE TABLE cart (
  id serial PRIMARY KEY,
  order_id int REFERENCES order(id) ON DELETE CASCADE,
  product_id int REFERENCES product(id) ON DELETE CASCADE,
  amount int NOT NULL,
  UNIQUE(order_id, product_id)
);
