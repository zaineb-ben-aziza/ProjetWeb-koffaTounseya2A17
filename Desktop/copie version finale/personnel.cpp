#include "personnel.h"
#include <QString>
#include "connectioncpp.h"
#include<QDate>
personnel::personnel()
{
         id=0;
         nomprenom="";
        fonctionalitte="";
        numtel="";
        ville="";
        cin="";
        email="";
        adresse="";


        etat="";
}
personnel::personnel(int id ,QString nomprenom ,QString fonctionalitte,QString numtel,QString ville,QString cin,QString email,QString adresse,QDate datenais,float salaire,QString etat)
{
    this->id=id;
    this->nomprenom=nomprenom;
   this->fonctionalitte=fonctionalitte;
   this->numtel=numtel;
   this->ville=ville;
   this->cin=cin;
   this->email=email;
   this->adresse=adresse;
   this->datenais=datenais;
   this->salaire=salaire;
   this->etat=etat;

}


//setters
void personnel::setid(int id)
{
this->id=id;
}


//ajout d'un personnel
bool personnel::ajouter()
{
    QString stringsalaire= QString :: number(salaire);
    QSqlQuery query;

 query.prepare("INSERT INTO personnel (idp,nom_prenom,FONCTIONNALITE,numtel,email,ville,adresse,cin,datedenaissance,salaire,etat) values (:id,:nomprenom,:fonctionalitte,:numtel,:email,:ville,:adresse,:cin,(TO_DATE(:datenais,'DD/MM/yyyy')),:salaire,:etat) ");

         query.bindValue(":id",id);
         query.bindValue(":fonctionalitte",fonctionalitte);
         query.bindValue(":nomprenom",nomprenom);
         query.bindValue(":numtel", numtel);
         query.bindValue(":email", email);
         query.bindValue(":ville", ville);
         query.bindValue(":adresse", adresse);
         query.bindValue(":cin", cin);
         query.bindValue(":datenais",datenais.toString("dd/MM/yyyy"));
         query.bindValue(":salaire", stringsalaire);
         query.bindValue(":etat", etat);
    return query.exec();
}




//affichage d'un personnel
QSqlQueryModel *personnel::afficher()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("Select * from personnel order by idp"));
query.exec();
model->setQuery(query);
return model;
}


QString personnel::test()
{
    QSqlQuery query;
    query.prepare(QString("select * from personnel where idp=:id"));
    query.bindValue(0,id);
    query.exec();
    query.next();
    return query.value(0).toString();//111

}



//supprimer d'un personnel
void personnel::supprimer()
{
    QSqlQuery query(QSqlDatabase::database("test-db"));
    query.prepare(QString("DELETE from personnel where idp=:id "));

    query.bindValue(":id",id);
    query.exec();


}




//modifier  un personnel
void personnel::modifierPersonnel()
{
    QSqlQuery query(QSqlDatabase::database("test-db"));
             QString stringsalaire= QString :: number(salaire);

        query.prepare(QString("update personnel set nom_prenom=:nomprenom,fonctionnalite=:fonctionalitte,numtel=:numtel,email=:email,ville=:ville,adresse=:adresse,cin=:cin,datedenaissance=TO_DATE(:datenaissance,'DD/MM/yyyy'),salaire=:salaire,etat=:etat where idp=:id"));
        query.bindValue(":id",id);
        query.bindValue(":fonctionalitte",fonctionalitte);
        query.bindValue(":nomprenom",nomprenom);
        query.bindValue(":numtel", numtel);
        query.bindValue(":email", email);
        query.bindValue(":ville", ville);
        query.bindValue(":adresse", adresse);
        query.bindValue(":cin", cin);
         query.bindValue(":datenaissance",datenais.toString("dd/MM/yyyy"));
        query.bindValue(":salaire", stringsalaire);
        query.bindValue(":etat", etat);
      query.exec();




}

//chercher  un personnel
QSqlQueryModel * personnel::chercher()
{

    QSqlQuery query;
    QSqlQueryModel *model=new QSqlQueryModel();
    query.prepare(QString("Select * from personnel where idp=:id"));
    query.bindValue(":id",id);
    query.exec();
    model->setQuery(query);
    return model;

}


//affichage  des salaires

QSqlQueryModel *personnel::afficher_Salaire()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("Select idp,nom_prenom,salaire from personnel order by idp"));
query.exec();
model->setQuery(query);
return model;
}


//calcule la somme des  salaires
QSqlQueryModel *personnel::calcul_somme_salaire()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("SELECT  SUM(salaire) AS somme_total from personnel "));
query.exec();
model->setQuery(query);
return model;
}

//trier les  salaires asc
QSqlQueryModel *personnel::tri_asc_salaire()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("select idp,nom_prenom,salaire from personnel order by salaire asc"));

query.exec();
model->setQuery(query);
return model;
}

//trier les  salaires desc
QSqlQueryModel *personnel::tri_desc_salaire()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("select idp,nom_prenom,salaire from personnel order by salaire desc "));
query.exec();
model->setQuery(query);
return model;
}


//afficher  les adresses  email
QSqlQueryModel *personnel::afficherEmail()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("Select  email from personnel "));
query.exec();
model->setQuery(query);
return model;
}

//affichage d'un personnel
QSqlQueryModel *personnel::afficherBDD()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("Select * from personnel order by idp"));
query.exec();
model->setQuery(query);
return model;
}



