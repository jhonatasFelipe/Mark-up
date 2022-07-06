
CREATE DATABASE markup
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

CREATE TABLE public.room
(
    id bigint NOT NULL DEFAULT nextval('room_sequency'::regclass),
    name character varying(45) COLLATE pg_catalog."default" NOT NULL,
    start_time time without time zone NOT NULL,
    end_time time without time zone NOT NULL,
    obs character varying(300) COLLATE pg_catalog."default",
    CONSTRAINT room_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE public.room
    OWNER to postgres;


CREATE TABLE public."user"
(
    id bigint NOT NULL DEFAULT nextval('user_sequency'::regclass),
    name character varying(100) COLLATE pg_catalog."default" NOT NULL,
    password character varying(45) COLLATE pg_catalog."default" NOT NULL,
    email character varying(100) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT user_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE public."user"
    OWNER to postgres;


CREATE TABLE public.reserva
(
    room bigint NOT NULL,
    "user" bigint NOT NULL,
    "time" timestamp without time zone NOT NULL,
    id bigint NOT NULL DEFAULT nextval('reserva_seq'::regclass),
    CONSTRAINT reserva_pkey PRIMARY KEY (id),
    CONSTRAINT room FOREIGN KEY (room)
        REFERENCES public.room (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT "user" FOREIGN KEY ("user")
        REFERENCES public."user" (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;

ALTER TABLE public.reserva
    OWNER to postgres;