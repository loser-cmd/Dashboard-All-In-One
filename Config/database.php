CREATE DATABASE dashboard_setda;
USE dashboard_setda;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255),
  role ENUM('pimpinan','admin')
);

INSERT INTO users VALUES
(1,'bupati',MD5('12345'),'pimpinan'),
(2,'admin',MD5('12345'),'admin');

CREATE TABLE kinerja (
  id INT AUTO_INCREMENT PRIMARY KEY,
  bagian VARCHAR(100),
  indikator VARCHAR(255),
  capaian INT,
  target INT
);

CREATE TABLE anggaran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  bagian VARCHAR(100),
  pagu INT,
  realisasi INT
);

CREATE TABLE kegiatan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_kegiatan VARCHAR(255),
  status VARCHAR(50),
  tahun INT
);

