#include "conge.h"
#include <QString>
#include "connectioncpp.h"
#include<QDate>
#include <QMessageBox>




conge::conge()
{
 idconge=0;

}


conge::conge(int id ,QDate datedebut,QDate datefin,QString typeconge,QString idpersonel)
{
   this->idconge=id;
    this->datedebut=datedebut;
    this->datefin=datefin;
    this->typeconge=typeconge;
    this->idpersonel=idpersonel;
}


void conge::settypeconge(QString type)
{
this->typeconge=type;
}


void conge::settidconge(int idcong)
{
    this->idconge=idcong;
}

//ajouter  un conge
bool conge::ajouterConge()
{

    QSqlQuery query;

         query.prepare("INSERT INTO conge (datedebut,datefin,idconge,idp,typedeconge) values (TO_DATE(:datedebut,'DD/MM/yyyy'),TO_DATE(:datefin,'DD/MM/yyyy'),:idconge,:idpersonel,:typeconge) ");
         query.bindValue(":datedebut",datedebut.toString("dd/MM/yyyy"));
         query.bindValue(":datefin",datefin.toString("dd/MM/yyyy"));
         query.bindValue(":idconge",idconge);
         query.bindValue(":typeconge",typeconge);
         query.bindValue(":idpersonel",idpersonel);

             return query.exec();
}


//modifier  un conge
void  conge::modifierconge()
{
    QString id = QString::number(idconge);
    QSqlQuery query(QSqlDatabase::database("test-db"));
        query.prepare(QString("update conge set typedeconge=:typeconge,datedebut=TO_DATE(:datedebut,'DD/MM/yyyy'),datefin=TO_DATE(:datefin,'DD/MM/yyyy') where idconge=:idconge"));
        query.bindValue(":datedebut",datedebut.toString("dd/MM/yyyy"));
        query.bindValue(":datefin",datefin.toString("dd/MM/yyyy"));
        query.bindValue(":idconge",id);
        query.bindValue(":typeconge",typeconge);
        query.exec();
}


//supprimer  un conge

void conge::supprimerConge()
{
    QSqlQuery query(QSqlDatabase::database("test-db"));
    query.prepare(QString("DELETE from conge where idconge=:idconge"));

    query.bindValue(":idconge",idconge);
    query.exec();
}

//chercher  un conge
QSqlQueryModel * conge::chercherConge()
{

    QSqlQuery query;
    QSqlQueryModel *model=new QSqlQueryModel();
    query.prepare(QString("Select * from conge where idconge=:idconge"));
    query.bindValue(":idconge",idconge);
    query.exec();
    model->setQuery(query);
    return model;

}

QSqlQueryModel *conge::test()
{QSqlQuery query;
    QSqlQueryModel *model=new QSqlQueryModel();
    query.prepare(QString("Select idp from personnel"));
    query.exec();
    model->setQuery(query);
    return model;

}

//afficher  un conge
QSqlQueryModel *conge::afficherConge()
{
QSqlQuery query;
QSqlQueryModel *model=new QSqlQueryModel();
query.prepare(QString("Select * from conge order by idconge"));
query.exec();
model->setQuery(query);
return model;
}


QString conge::test2()
{
    QSqlQuery query;
    query.prepare(QString("select * from conge where idconge=:id"));
    query.bindValue(0,idconge);
    query.exec();
    query.next();
    return query.value(0).toString();

}
