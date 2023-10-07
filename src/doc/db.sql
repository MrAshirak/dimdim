CREATE DATABASE dimdim;

USE dimdim;

CREATE TABLE IF NOT EXISTS user(
	id VARCHAR(512) NOT NULL PRIMARY KEY UNIQUE,
	name VARCHAR(100) NOT NULL,
	login VARCHAR (50) NOT NULL UNIQUE,
	passowrd VARCHAR(512) NOT NULL,
	password_vault VARCHAR(521) NOT NULL;	
);

CREATE INDEX IF NOT EXISTS idx_id_user ON user (id);
CREATE INDEX IF NOT EXISTS idx_login_user ON user (login);

CREATE TABLE IF NOT EXISTS debit(){
	id VARCHAR(512) NOT NULL PRIMARY KEY UNIQUE,
	name VARCHAR(70) NOT NULL,
	dataMaturity DATE NOT NULL,
	status TINYINT, --0 -> ha vencer, 1-> paga , 2-> quitada 
	descricao VARCHAR(250),
	value DECIMAL(7,2) NOT NULL,
};

CREATE INDEX IF NOT EXISTS idx_name_debit ON debit(name);
CREATE INDEX IF NOT EXISTS idx_value_debit ON debit(value);

CREATE TABLE IF NOT EXISTS proofnet(
	id VARCHAR(512) NOT NULL UNIQUE,
	body BLOB NOT NULL, 
	type VARCHAR(25),
	size VARCHAR(20)
);

CREATE INDEX IF NOT EXISTS idx_id_proofnet ON proofnet(id)

CREATE TABLE IF NOT EXISTS calc (
	id VARCHAR(521) NOT NULL UNIQUE,
	history VARCHAR(1000) NOT NULL
);

CREATE INDEX IF NOT EXISTS idx_id_calc ON calc(id)

CREATE TABLE IF NOT EXISTS auth(
	id VARCHAR(512) NOT NULL PRIMARY KEY,
	vault_pass= VARCHAR(512) NOT NULL,
	CONSTRAINT (fk_voult_pass) FOREIGN KEY vault_pass REFERENCES user (vault_pass)
);

CREATE INDEX IF NOT EXISTS idx_pass_voult ON auth(id)

CREATE TABLE IF NOT EXISTS analitics(
	id VARCHAR(512) NOT NULL PRIMARY KEY,
	analitic_file VARCHAR(1000),
	date DATE,
	mount_reference DATE
);

CREATE INDEX IF NOT EXISTS idx_pass_vault ON analitics(id)
CREATE INDEX IF NOT EXISTS idx_pass_vault ON analitics(analitic_file)


