--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.1
-- Dumped by pg_dump version 9.6.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: book; Type: TABLE; Schema: public; Owner: rnwshjumxrjfuf
--

CREATE TABLE book (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    author character varying(100) NOT NULL,
    publisher character varying(100) NOT NULL,
    year smallint NOT NULL,
    book_genre integer NOT NULL,
    book_review integer NOT NULL
);


ALTER TABLE book OWNER TO rnwshjumxrjfuf;

--
-- Name: book_id_seq; Type: SEQUENCE; Schema: public; Owner: rnwshjumxrjfuf
--

CREATE SEQUENCE book_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE book_id_seq OWNER TO rnwshjumxrjfuf;

--
-- Name: book_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER SEQUENCE book_id_seq OWNED BY book.id;


--
-- Name: genre; Type: TABLE; Schema: public; Owner: rnwshjumxrjfuf
--

CREATE TABLE genre (
    id integer NOT NULL,
    type character varying(100) NOT NULL
);


ALTER TABLE genre OWNER TO rnwshjumxrjfuf;

--
-- Name: genre_id_seq; Type: SEQUENCE; Schema: public; Owner: rnwshjumxrjfuf
--

CREATE SEQUENCE genre_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE genre_id_seq OWNER TO rnwshjumxrjfuf;

--
-- Name: genre_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER SEQUENCE genre_id_seq OWNED BY genre.id;


--
-- Name: review; Type: TABLE; Schema: public; Owner: rnwshjumxrjfuf
--

CREATE TABLE review (
    id integer NOT NULL,
    rating smallint NOT NULL,
    note_text text NOT NULL
);


ALTER TABLE review OWNER TO rnwshjumxrjfuf;

--
-- Name: review_id_seq; Type: SEQUENCE; Schema: public; Owner: rnwshjumxrjfuf
--

CREATE SEQUENCE review_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE review_id_seq OWNER TO rnwshjumxrjfuf;

--
-- Name: review_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER SEQUENCE review_id_seq OWNED BY review.id;


--
-- Name: book id; Type: DEFAULT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY book ALTER COLUMN id SET DEFAULT nextval('book_id_seq'::regclass);


--
-- Name: genre id; Type: DEFAULT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY genre ALTER COLUMN id SET DEFAULT nextval('genre_id_seq'::regclass);


--
-- Name: review id; Type: DEFAULT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY review ALTER COLUMN id SET DEFAULT nextval('review_id_seq'::regclass);


--
-- Data for Name: book; Type: TABLE DATA; Schema: public; Owner: rnwshjumxrjfuf
--

COPY book (id, name, author, publisher, year, book_genre, book_review) FROM stdin;
\.


--
-- Name: book_id_seq; Type: SEQUENCE SET; Schema: public; Owner: rnwshjumxrjfuf
--

SELECT pg_catalog.setval('book_id_seq', 1, false);


--
-- Data for Name: genre; Type: TABLE DATA; Schema: public; Owner: rnwshjumxrjfuf
--

COPY genre (id, type) FROM stdin;
\.


--
-- Name: genre_id_seq; Type: SEQUENCE SET; Schema: public; Owner: rnwshjumxrjfuf
--

SELECT pg_catalog.setval('genre_id_seq', 1, false);


--
-- Data for Name: review; Type: TABLE DATA; Schema: public; Owner: rnwshjumxrjfuf
--

COPY review (id, rating, note_text) FROM stdin;
\.


--
-- Name: review_id_seq; Type: SEQUENCE SET; Schema: public; Owner: rnwshjumxrjfuf
--

SELECT pg_catalog.setval('review_id_seq', 1, false);


--
-- Name: book book_pkey; Type: CONSTRAINT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY book
    ADD CONSTRAINT book_pkey PRIMARY KEY (id);


--
-- Name: genre genre_pkey; Type: CONSTRAINT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY genre
    ADD CONSTRAINT genre_pkey PRIMARY KEY (id);


--
-- Name: review review_pkey; Type: CONSTRAINT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY review
    ADD CONSTRAINT review_pkey PRIMARY KEY (id);


--
-- Name: book book_book_genre_fkey; Type: FK CONSTRAINT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY book
    ADD CONSTRAINT book_book_genre_fkey FOREIGN KEY (book_genre) REFERENCES genre(id);


--
-- Name: book book_book_review_fkey; Type: FK CONSTRAINT; Schema: public; Owner: rnwshjumxrjfuf
--

ALTER TABLE ONLY book
    ADD CONSTRAINT book_book_review_fkey FOREIGN KEY (book_review) REFERENCES review(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: rnwshjumxrjfuf
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO rnwshjumxrjfuf;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO rnwshjumxrjfuf;


--
-- PostgreSQL database dump complete
--

