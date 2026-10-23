--
-- PostgreSQL database dump
--

\restrict NXQAVH8gVhO5QaBlf879PpVk5ihxiqaJdwLw0XG7GZzoYzzQO8deFoMp8Q3oDoz

-- Dumped from database version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)
-- Dumped by pg_dump version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: especies; Type: TABLE; Schema: public; Owner: jediarch
--

CREATE TABLE public.especies (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    origem character varying(255) NOT NULL,
    idade_max integer NOT NULL,
    sensitivo boolean,
    url_image text
);


ALTER TABLE public.especies OWNER TO jediarch;

--
-- Name: especies_id_seq; Type: SEQUENCE; Schema: public; Owner: jediarch
--

CREATE SEQUENCE public.especies_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.especies_id_seq OWNER TO jediarch;

--
-- Name: especies_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jediarch
--

ALTER SEQUENCE public.especies_id_seq OWNED BY public.especies.id;


--
-- Name: planetas; Type: TABLE; Schema: public; Owner: jediarch
--

CREATE TABLE public.planetas (
    id integer NOT NULL,
    nome character varying(255),
    regiao character varying(255),
    geografia character varying(255),
    url_image text
);


ALTER TABLE public.planetas OWNER TO jediarch;

--
-- Name: planetas_id_seq; Type: SEQUENCE; Schema: public; Owner: jediarch
--

CREATE SEQUENCE public.planetas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.planetas_id_seq OWNER TO jediarch;

--
-- Name: planetas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jediarch
--

ALTER SEQUENCE public.planetas_id_seq OWNED BY public.planetas.id;


--
-- Name: sith; Type: TABLE; Schema: public; Owner: jediarch
--

CREATE TABLE public.sith (
    id integer NOT NULL,
    nome character varying(255),
    hierarquia character varying(255),
    ano character varying(255),
    url_image text
);


ALTER TABLE public.sith OWNER TO jediarch;

--
-- Name: sith_id_seq; Type: SEQUENCE; Schema: public; Owner: jediarch
--

CREATE SEQUENCE public.sith_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.sith_id_seq OWNER TO jediarch;

--
-- Name: sith_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jediarch
--

ALTER SEQUENCE public.sith_id_seq OWNED BY public.sith.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: jediarch
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    email character varying(255) NOT NULL,
    passwd character varying(255) NOT NULL,
    is_admin boolean DEFAULT false
);


ALTER TABLE public.usuarios OWNER TO jediarch;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: jediarch
--

CREATE SEQUENCE public.usuarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_seq OWNER TO jediarch;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jediarch
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- Name: especies id; Type: DEFAULT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.especies ALTER COLUMN id SET DEFAULT nextval('public.especies_id_seq'::regclass);


--
-- Name: planetas id; Type: DEFAULT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.planetas ALTER COLUMN id SET DEFAULT nextval('public.planetas_id_seq'::regclass);


--
-- Name: sith id; Type: DEFAULT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.sith ALTER COLUMN id SET DEFAULT nextval('public.sith_id_seq'::regclass);


--
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- Data for Name: especies; Type: TABLE DATA; Schema: public; Owner: jediarch
--

COPY public.especies (id, nome, origem, idade_max, sensitivo, url_image) FROM stdin;
2	Humano	Coruscant	100	t	https://static.wikia.nocookie.net/starwars/images/d/db/Human_Mercenary.jpg/revision/latest?cb=20140206154628
6	Gungan	Naboo	65	f	upload/esp_6ac92d88968e9.png
7	Zabrak	Iridonia - Dathomir	100	t	upload/esp_6ad914ffb33ba.webp
\.


--
-- Data for Name: planetas; Type: TABLE DATA; Schema: public; Owner: jediarch
--

COPY public.planetas (id, nome, regiao, geografia, url_image) FROM stdin;
2	Coruscant	Núcleo	Ecumenópole	https://static.wikia.nocookie.net/starwars/images/8/84/CoruscantGlobeE1.png/revision/latest?cb=20240513175137
5	Mandalore	Orla Exterior	Deserto	upload/esp_6ad9134c8b908.png
6	Kashyyyk	Orla Média	Florestas	upload/esp_6ad913894b5bf.jpg
\.


--
-- Data for Name: sith; Type: TABLE DATA; Schema: public; Owner: jediarch
--

COPY public.sith (id, nome, hierarquia, ano, url_image) FROM stdin;
2	Darth Vader	Lorde Sith	19 ABY - 4 DBY	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfJfAnMZEWk1gNjMvseuYRR53k3jXos8l5KhcS70EEvMoKF8PuEdIRHGE&s=10
3	Darth Sidious	Lorde Sombrio dos Sith	82 ABY - 35 DBY	upload/esp_6ac644174c724.jpg
4	Darth Nader	Lorde Sith	1000000 DBY	upload/esp_6ac654f416d2b.jpg
5	Darth Revan	Lorde Sombrio dos Sith	3994 ABY - 3638 ABY	upload/esp_6ad914860a57f.jpg
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: jediarch
--

COPY public.usuarios (id, email, passwd, is_admin) FROM stdin;
1	teste@gmail.com	123	f
4	anakin@jediorder.com	1234	f
5	zyfovias@jediordem.com	123456	t
6	kenobi@jediorder.com	highground	f
\.


--
-- Name: especies_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jediarch
--

SELECT pg_catalog.setval('public.especies_id_seq', 7, true);


--
-- Name: planetas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jediarch
--

SELECT pg_catalog.setval('public.planetas_id_seq', 6, true);


--
-- Name: sith_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jediarch
--

SELECT pg_catalog.setval('public.sith_id_seq', 5, true);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jediarch
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 6, true);


--
-- Name: especies especies_pkey; Type: CONSTRAINT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.especies
    ADD CONSTRAINT especies_pkey PRIMARY KEY (id);


--
-- Name: planetas planetas_pkey; Type: CONSTRAINT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.planetas
    ADD CONSTRAINT planetas_pkey PRIMARY KEY (id);


--
-- Name: sith sith_pkey; Type: CONSTRAINT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.sith
    ADD CONSTRAINT sith_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuarios_email_key; Type: CONSTRAINT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_email_key UNIQUE (email);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: jediarch
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

\unrestrict NXQAVH8gVhO5QaBlf879PpVk5ihxiqaJdwLw0XG7GZzoYzzQO8deFoMp8Q3oDoz

