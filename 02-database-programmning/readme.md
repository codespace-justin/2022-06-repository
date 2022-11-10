# Database:

## Types of database languages :

    1. SQL : Structured Query Language
        - MySQL
        - PostgreSQL
        - SQLServer
        - SQLlite

    2  NoSQL : Not ony SQL
        - MongoDB
        - CassandraDB

## Relational Databases:

    1. Primary Key:
        - This dictates which column inside a table stores the unique identifier for that table
        - cannot be null
        - can be used in another in other tables as reference to link related tables
        - unique

    2. Foreign Key: 
        - contains the primary key of a related table


## Three Layered Architecture:

    1. Data Persistence Layer:
        - encapsulates all interactions between model data and the database
        - contains SQL queries
        - DBConnection

    2. Business Logic Layer:
        - aka Services
        - Encapsulates all business logic, methods, funcitonality related to our systems entities

    3. Presentation Layer:
        - Physical user interface
        - website
        - templating
        - client
        - Controller