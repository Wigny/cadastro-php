create table contatos (
	id serial not null constraint contatos_pkey	primary key,
	nome varchar(100),
	email varchar(255),
	fone varchar(15)
);

