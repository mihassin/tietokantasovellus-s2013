create table PRODUCT(
  product_id integer not null primary key,
  FOREIGN key (product_type_id) REFERENCES PRODUCT_TYPE(product_type_id),
  name varchar(30) not null,
  description varchar(255),
  price decimal(6,2)
);

create table PRODUCT_TYPE(
  product_type_id integer not null primary key,
  description varchar(30) not null
);

create table USER(
  user_id integer not null primary key,
  FOREIGN key (role_type_id) REFERENCES ROLE_TYPE(role_type_id),
  first varchar(30) not null,
  second varchar(30) not null,
  e-mail varchar(255) not null,
  phone varchar(255) not null
);

create table ROLE_TYPE(
  role_type_id integer not null primary key,
  description varchar(30) not null
);

create table ORDER(
  order_id integer not null primary key,
  FOREIGN key (user_id) REFERENCES USER(user_id),
  address varchar(255) not null,
  deliver_time date not null,
  total_price decimal(6,2)
);

create table CART(
  FOREIGN key (order_id) REFERENCES ORDER(order_id),
  FOREIGN key (product_id) REFERENCES PRODUCT(product_id),
  amount integer not null
);

create table CONTENT(
  FOREIGN key (product_id) REFERENCES PRODUCT(product_id),
  FOREIGN key (material_id) REFERENCES MATERIAL(material_id)
);

create table MATERIAL(
  material_id integer not null primary key,
  FOREIGN key (product_type_id) REFERENCES PRODUCT_TYPE(product_type_id),
  description varchar(30) not null,
  price decimal(6,2)
);
