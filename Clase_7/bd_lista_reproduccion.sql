Create  DataBase bd_lr_Oliver;

-- Tabla Usuario--
Create Table Usuario(
    Nickname varchar (20),
    Nombre_Apellido varchar(100) not null,
    Email varchar(50) not null,
    Password varchar(10) not null,
    Primary key(Nickname)
);

-- Tabla Genero--
Create Table Genero(
    ID int Auto_Increment,
    Descripcion varchar(100) not null,
    Primary key(ID)
);

-- Tabla Cancion--
Create Table Cancion(
    ID int Auto_Increment,
    Nombre varchar(100),
    Autor varchar(100),
    Nickname varchar(20),
    Genero_ID int,
    Primary key(ID)
);

Alter Table Cancion add constraint fk_cancion_usuario
Foreign key(Nickname) references Usuario(Nickname);

Alter Table Cancion add constraint fk_cancion_genero
Foreign key(Genero_ID) references Genero(ID);

Create Table Lista_Reproduccion(
    ID int Auto_Increment,
    Descripcion varchar(100),
    Nickname varchar(20),
    Primary key(ID)
);

Alter Table Lista_Reproduccion add constraint fk_lista_usuario
Foreign key(Nickname) references Usuario(Nickname);

-- Tabla Lista Cancion--
Create Table Lista_Cancion(
    Lista_ID int,
    Cancion_ID int,
);

Alter Table Lista_Cancion add constraint pk_lista_cancion
Primary key(Lista_ID, Cancion_ID);

Alter Table Lista_Cancion add constraint fk_listac_listar
Foreign key(Lista_ID) references Lista_Reproduccion(ID);

Alter Table Lista_Cancion add constraint fk_listac_cancion
Foreign key(Cancion_ID) references Cancion(ID);