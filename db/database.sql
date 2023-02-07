create table users
(
    id_user  serial
        primary key,
    name     varchar(100) not null,
    email    varchar(100) not null,
    password varchar(100) not null,
    role     integer default 0
);

alter table users
    owner to zoltw;

create table products
(
    id_products serial
        constraint products_pk
            primary key,
    product_1   varchar(100) not null,
    amount_1    varchar(16),
    unit_1      varchar(16),
    product_2   varchar(100) not null,
    amount_2    integer,
    unit_2      varchar(16),
    product_3   varchar(100) not null,
    amount_3    integer,
    unit_3      varchar(16),
    product_4   varchar(100) not null,
    amount_4    integer,
    unit_4      varchar(16),
    product_5   varchar(100),
    amount_5    integer,
    unit_5      varchar(16),
    product_6   varchar(100),
    amount_6    integer,
    unit_6      varchar(16),
    product_7   varchar(100),
    amount_7    integer,
    unit_7      varchar(16),
    product_8   varchar(100),
    amount_8    integer,
    unit_8      varchar(16),
    product_9   varchar(100),
    amount_9    integer,
    unit_9      varchar(16),
    product_10  varchar(100),
    amount_10   integer,
    unit_10     varchar(16)
);

alter table products
    owner to zoltw;

create table optional_products
(
    id_optional serial
        constraint optional_products_pk
            primary key,
    product_o_1 varchar(100) not null,
    amount_o_1  integer,
    unit_o_1    varchar(16)  not null
);

alter table optional_products
    owner to zoltw;

create table meals
(
    id_meal           serial
        primary key,
    name              varchar(100)  not null,
    type              varchar(100)  not null,
    goal              varchar(100)  not null,
    time              integer       not null,
    level_diff        varchar(32)   not null,
    products          integer
        constraint meals_products_id_products_fk
            references products
            on update cascade,
    optional_products integer
        constraint meals_optional_products_id_optional_fk
            references optional_products
            on update cascade,
    image             varchar(255)  not null,
    description_1     varchar(1024) not null,
    description_2     varchar(1024) not null,
    description_3     varchar(1024) not null,
    description_4     varchar(1024),
    description_5     varchar(1024)
);

alter table meals
    owner to zoltw;

create table list
(
    id_user_list integer
        constraint list_users_id_user_fk
            references users
            on update cascade on delete cascade,
    id_meal_list integer
        constraint list_meals_id_meal_fk
            references meals
            on update cascade
);

alter table list
    owner to zoltw;

create function uuid_nil() returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_nil() owner to zoltw;

create function uuid_ns_dns() returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_ns_dns() owner to zoltw;

create function uuid_ns_url() returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_ns_url() owner to zoltw;

create function uuid_ns_oid() returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_ns_oid() owner to zoltw;

create function uuid_ns_x500() returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_ns_x500() owner to zoltw;

create function uuid_generate_v1() returns uuid
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_generate_v1() owner to zoltw;

create function uuid_generate_v1mc() returns uuid
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_generate_v1mc() owner to zoltw;

create function uuid_generate_v3(namespace uuid, name text) returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_generate_v3(uuid, text) owner to zoltw;

create function uuid_generate_v4() returns uuid
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_generate_v4() owner to zoltw;

create function uuid_generate_v5(namespace uuid, name text) returns uuid
    immutable
    strict
    parallel safe
    language c
as
$$
begin
-- missing source code
end;
$$;

alter function uuid_generate_v5(uuid, text) owner to zoltw;

