CREATE TABLE chars (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  idade INTEGER NOT NULL
);

INSERT INTO chars (	nome,idade)
VALUES  ('Pedro', 25);