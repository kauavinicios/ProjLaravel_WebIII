CREATE TABLE upas (
                      id SERIAL NOT NULL PRIMARY KEY,
                      nome VARCHAR(100) not null,
                      localizacao VARCHAR(100)
);

CREATE TABLE especialidades (
                          id SERIAL NOT NULL PRIMARY KEY,
                          nome VARCHAR(50),
                          area INT,
                          descricao VARCHAR(500)
);

CREATE TABLE medicos (
                         id SERIAL NOT NULL PRIMARY KEY,
                         nome VARCHAR(50),
                         datanascimento DATE,
                         crm VARCHAR(14) UNIQUE,
                         especialidade INT REFERENCES especialidades(id) ON DELETE CASCADE,
                         afiliacao INT REFERENCES upas(id) ON DELETE CASCADE
);

CREATE TABLE enfermeiras (
                             id SERIAL NOT NULL PRIMARY KEY,
                             nome VARCHAR(50),
                             cpf VARCHAR(11) UNIQUE,
                             datanascimento DATE,
                             afiliacao INT REFERENCES upas(id) ON DELETE CASCADE
);

CREATE TABLE faxineiros (
                           id SERIAL NOT NULL PRIMARY KEY,
                           nome VARCHAR(50),
                           cpf VARCHAR(50),
                           afiliacao INT REFERENCES upas(id) ON DELETE CASCADE
);

CREATE TABLE assisSociais (
                          id SERIAL NOT NULL PRIMARY KEY,
                          nome VARCHAR(50),
                          cpf VARCHAR(11) UNIQUE,
                          email VARCHAR(50),
                          especialidade INT REFERENCES especialidades(id) ON DELETE CASCADE,
                          afiliacao INT REFERENCES upas(id) ON DELETE CASCADE
);

CREATE TABLE recepicionistas (
                             id SERIAL NOT NULL PRIMARY KEY,
                             nome VARCHAR(50),
                             cpf VARCHAR(11) UNIQUE,
                             email VARCHAR(50),
                             afiliacao INT REFERENCES upas(id) ON DELETE CASCADE
);


insert into upas(nome, localizacao)
values('upa1', 'logo ali'),
      ('upa2', 'depois de logo ali'),
      ('upa3', 'logo la'),
      ('upa4', 'depois de logo la');

insert into especialidades(nome, area, descricao)
values('Pediatra', 1, 'Concentra-se no cuidado de crianças, desde o nascimento até a adolescência.'),
      ('Obstetrícia e Ginecologia', 1,'Concentra-se na saúde da mulher, incluindo cuidados pré-natais, parto, saúde reprodutiva e doenças ginecológicas.'),
      ('Cirurgia geral', 1, 'Concentra-se em procedimentos cirúrgicos para uma ampla variedade de condições médicas.'),
      ('Sexologia', 1, ' Concentra-se no estudo e tratamento dos aspectos relacionados à sexualidade humana, abordando questões como disfunções sexuais, terapia sexual, educação sexual, questões de gênero e identidade sexual, e promoção da saúde sexual e do bem-estar emocional relacionados à sexualidade.'),
      ('oncologia', 2, 'Concentrar-se no apoio a pacientes com câncer e suas famílias, fornecendo suporte emocional, informações sobre recursos e serviços disponíveis, coordenação de cuidados, auxílio na navegação do sistema de saúde e ajuda na tomada de decisões relacionadas ao tratamento.'),
      ('cuidados paliativos', 2, 'Trabalhar com pacientes com doenças terminais e suas famílias, oferecendo apoio emocional, ajudando no planejamento de cuidados de fim de vida, fornecendo informações sobre opções de tratamento, auxiliando na gestão da dor e no acesso a serviços de cuidados paliativos.'),
      ('saúde mental hospitalar', 2, ' Focar no suporte a pacientes internados em unidades de saúde mental, fornecendo avaliação, aconselhamento, intervenção de crise, coordenação de alta hospitalar, encaminhamento para serviços ambulatoriais de saúde mental e planejamento de cuidados posteriores à internação.'),
      ('cuidados intensivos', 2, 'Trabalhar com pacientes em unidades de terapia intensiva (UTI), fornecendo apoio emocional aos pacientes e às suas famílias, auxiliando na tomada de decisões difíceis, facilitando a comunicação entre a equipe médica e a família e coordenando a transição para outros níveis de cuidados.');

insert into medicos(nome, datanascimento, crm, especialidade, afiliacao)
values('cristiano', '03-05-1969', '111.111.111–11', 1, 1),
      ('bruno', '05-05-1955', '222.222.222-22', 2, 2),
      ('kaua', '03-03-2003', '333.333.333-33', 3, 3),
      ('julia', '06-06-1989', '444.444.444-44', 4, 4);

insert into enfermeiras(nome, cpf, datanascimento, afiliacao)
values('cristiana', '99999999999', '04-04-2000', 2),
      ('bruna', '88888888888', '07-10-1993', 1),
      ('kauani', '77777777777', '09-01-1989', 3),
      ('julio', '66666666666', '18-01-1987', 4);

insert into faxineiros(nome, cpf, afiliacao)
values('bruce', '12345678910', 1),
      ('joise', '12345678911', 2),
      ('ivone', '12345678912', 4),
      ('mauro', '12345678913', 4);

insert into assisSociais(nome, cpf, email, especialidade, afiliacao)
values('rivotril', 'bom pro estresse'),
      ('dorflex', 'bom para dores no corpo'),
      ('viagra', 'potencializa o soudado abatido'),
      ('dipirona', 'ajuda com a dor de cabeça');

insert into farmRemedios(idFarm, idRemedio, preco, qnt)
values(1, 2, 30, 50),
      (3, 3, 79, 70),
      (2, 2, 9.90, 70),
      (4, 3, 50.30, 100),
      (4, 1, 7.99, 40),
      (1, 1, 67.78, 90);

insert into receitas(descricao, qnt, medicoId, enfermeiraId, remedioId)
values('ele ta mau', 1, 4, 2, 3),
      ('esse ta pessimo', 15, 2, 1, 4),
      ('vc vai melhorar', 2, 3, 3, 2),
      ('bora meu garoto', 2, 1, 4, 2);
