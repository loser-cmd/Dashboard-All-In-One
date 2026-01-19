CREATE DATABASE dashboard_setda;
USE dashboard_setda;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 password TEXT,
 role ENUM('admin','pimpinan')
);

CREATE TABLE kinerja (
 id INT AUTO_INCREMENT PRIMARY KEY,
 bagian VARCHAR(100),
 indikator VARCHAR(150),
 capaian INT,
 target INT
);

CREATE TABLE anggaran (
 id INT AUTO_INCREMENT PRIMARY KEY,
 program VARCHAR(150),
 pagu INT,
 realisasi INT
);

CREATE TABLE kegiatan (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nama_kegiatan VARCHAR(150),
 status VARCHAR(50)
);
