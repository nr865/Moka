CREATE TABLE suppliers (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);

CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);
CREATE TABLE types (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);
CREATE TABLE quantities (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);


CREATE TABLE clients (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    address VARCHAR(255),
    zip_code VARCHAR(5),
    town VARCHAR(30),
    mail VARCHAR(130),
    phone VARCHAR(10)
);

CREATE TABLE products (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    FOREIGN KEY(supplier_id) REFERENCES suppliers(id),
    category_id INT,
    FOREIGN KEY(category_id) REFERENCES categories(id),
    quantity_id INT,
    FOREIGN KEY(quantity_id) REFERENCES quantities(id),
    type_id INT,
    FOREIGN KEY(type_id) REFERENCES types(id),
    name VARCHAR(50),
    description TEXT,
    image VARCHAR(255),
    price INT
);
 
CREATE TABLE orders (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    FOREIGN KEY(product_id)REFERENCES products(id),
    client_id INT,
    FOREIGN KEY(client_id) REFERENCES clients(id),
    order_date DATE,
    quantity INT
);