# Creation table Cars

CREATE TABLE IF NOT EXISTS Cars(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL ,
    kilometre INT NOT NULL ,
    year INT NOT NULL ,
    image VARCHAR(255) DEFAULT NULL
);

# Creation table employee

CREATE TABLE IF NOT EXISTS Employee(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL ,
    firstname VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL ,
    role VARCHAR(255) NOT NULL ,
    birthday DATE
);

ALTER TABLE Cars ADD COLUMN description VARCHAR(2555);

ALTER TABLE Cars ADD COLUMN price FLOAT;

ALTER TABLE Cars MODIFY description text NOT NULL ;

INSERT INTO Cars ('name', 'kilometre', 'year', 'image', 'description', 'price') VALUES
('CLIO', 20000, 2015, NULL, 'Renault Clio Estate TCE 90 LIMITED GARANTIE 3ANS break, rouge métallise, 5 cv, 5 portes, première mise en circulation le 12/12/2019, garantie 36 mois.', 15000),
('CLIO', 20000, 2015, NULL, 'Renault Clio Estate TCE 90 LIMITED GARANTIE 3ANS break, rouge métallise, 5 cv, 5 portes, première mise en circulation le 12/12/2019, garantie 36 mois.', 15000),
('CLIO', 20000, 2015, NULL, 'Renault Clio Estate TCE 90 LIMITED GARANTIE 3ANS break, rouge métallise, 5 cv, 5 portes, première mise en circulation le 12/12/2019, garantie 36 mois.', 15000)