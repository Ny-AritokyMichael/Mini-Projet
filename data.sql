create database rechauffement;
use rechauffement;

    create table admin(
        email varchar(50) not null,
        mdp varchar(50) not null
    );

    
    drop view v_rechauffement_climatique;
    drop table details_rechauffement_climatique;
    drop table rechauffement_climatique;




    create table rechauffement_climatique(
        id_rechauffement_climatique serial not null,
        facteur varchar(250) not null,
        url varchar(250) default null,
        description varchar(500) default null,
        primary key(id_rechauffement_climatique) 
    );

    create table details_rechauffement_climatique(
        id_details_rechauffement_climatique serial not null,
        id_rechauffement_climatique int not null,
        image varchar(50) default null,
        consequence varchar(50) default null,
        solution varchar(50) default null,
        primary key(id_details_rechauffement_climatique),
        foreign key(id_rechauffement_climatique) references rechauffement_climatique(id_Rechauffement_climatique) on delete cascade
    );

    insert into rechauffement_climatique values(default, 'Aerosol et nuages','Aerosols-et-nuages-2.html','ils sont de cause du rechauffement dans presque les forets');
    insert into rechauffement_climatique values(default, 'Activites solaire et volcanique','Activites-solaire-et-volcanique-4.html',E'Les eruptions explosives projettent  de gigantesques quantite de cendre dans l\'atmosphere qui peuvent faire le tour de la terre, poussees par les vents. Il y a des repercussions sur le climat puisque ces cendres voilent le soleil et provoquent un bref refroidissement.');


        insert into details_rechauffement_climatique values(default,1,'image-facteur1.jpg','Polution de rivotra','reboisement');
        insert into details_rechauffement_climatique values(default,2,'image-facteur2.jpg','Secheresse sans propre','ne pas coute');


        create view v_rechauffement_climatique as 
        select
        rechauffement_climatique.id_rechauffement_climatique,
        rechauffement_climatique.facteur,
        rechauffement_climatique.url,
        rechauffement_climatique.description,
        details_rechauffement_climatique.id_details_rechauffement_climatique,
        details_rechauffement_climatique.image, 
        details_rechauffement_climatique.consequence, 
        details_rechauffement_climatique.solution
        from rechauffement_climatique
        join details_rechauffement_climatique on details_rechauffement_climatique.id_rechauffement_climatique = rechauffement_climatique.id_rechauffement_climatique;















-- create database reference;
-- use reference;

-- create table categorie(
--     id int not null primary key auto_increment,
--     nom varchar(50)
-- );

-- create table actus(
--     id int not null primary key auto_increment,
--     daty date,
--     idcategorie int,
--     titre varchar(200),
--     resum text,
--     contenu text,
--     url varchar(255)
-- );

-- alter table actus add foreign key (idcategorie) references categorie(id);

-- INSERT INTO categorie values(null,'sport');
-- INSERT INTO categorie values(null,'actus');

-- INSERT INTO actus 
-- values(1, '2020-02-01',1,'Resy italie omaly hariva','Resy italie omaly hariva teo amin ny dingana famaranana','Tsy afaka manohy ny lalao intsony i italie rehefa resy','resy-italie-omaly-hariva');

-- create view v_actus as (select a.id,a.daty,c.nom,a.titre,a.resum,a.contenu,a.url from actus a 
--     join categorie c 
--     on a.idcategorie=c.id
-- );



