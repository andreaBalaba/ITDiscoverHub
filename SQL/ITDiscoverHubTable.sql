create database dbITDiscoverHub;

create table tblSmartPhone(
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
screen text not null,
os varchar(255) not null,
chipset varchar(255) not null,
GPU varchar(255) not null,
RAM varchar(255) not null,
Storage varchar(255) not null,
rearCam varchar(255) not null,
frontCam varchar(255) not null,
Price float not null
);

create table tblMonitor (
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
screen text not null,
resolution varchar(255) not null,
aspectRatio varchar(255) not null,
refreshRate varchar(255) not null,
panelType varchar(255) not null,
weightDimension varchar(255) not null,
price float not null
);

create table tblKeyBoard (
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
keyboardType varchar(255) not null,
switchType varchar(255) not null,
connectType varchar(255) not null,
weight varchar(255) not null,
powerVolt varchar(255) not null,
price float not null
);

create table tblMouse (
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
dpi varchar(255) not null,
connectivity varchar(255) not null,
scrollType varchar(255) not null,
weight varchar(255) not null,
powerVolt varchar(255) not null,
price float not null
);

create table tblWebCam (
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
resolution varchar(255) not null,
focusType varchar(255) not null,
connectivity varchar(255) not null,
builtInMic varchar(255) not null,
Weight varchar(255) not null,
price float not null
);

create table tblLaptop (
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
os varchar(255) not null,
processor varchar(255) not null,
RAM varchar(255) not null,
Storage varchar(255) not null,
price float not null
);

create table tblGraphicCard (
brand varchar(255) not null,
model varchar(255) not null,
image mediumblob null,
graphicProcessing varchar(255) not null,
boostClock varchar(255) not null,
cudaCores varchar(255) not null,
memorySpeed varchar(255) not null,
memorySize varchar(255) not null,
memoryType varchar(255) not null,
memoryBus varchar(255) not null,
memoryBandwidth varchar(255) not null,
cardBus varchar(255) not null,
resolution varchar(255) not null,
fan varchar(255) not null,
outputs varchar(255) not null,
price float not null
);




