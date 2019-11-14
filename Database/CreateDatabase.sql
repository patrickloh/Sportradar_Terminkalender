USE Master

IF EXISTS(SELECT * FROM sysdatabases WHERE name = 'SportsDiary')
    DROP DATABASE PictureDatabase
GO

CREATE DATABASE PictureDatabase

ON PRIMARY (
  Name = 'SportsDiary_DATA',
  Filename='C:\Program Files\Microsoft SQL Server\MSSQL14.SQLSERVER\MSSQL\DATA\SportsDiary_DATA.mdf',
  Size = 10MB,
  Filegrowth = 10%
)
LOG ON (
  Name = 'SportsDiary_log',
  Filename='C:\Program Files\Microsoft SQL Server\MSSQL14.SQLSERVER\MSSQL\DATA\SportsDiary_LOG.ldf',
  Size = 10MB,
  Filegrowth = 10%
)