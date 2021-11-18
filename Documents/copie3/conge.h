#ifndef CONGE_H
#define CONGE_H
#include<QString>
#include <QSqlQueryModel>
#include<QDateEdit>


class conge
{
public:
    //constructeur
     conge();
     conge (int id ,QDate datedebut,QDate datefin,QString typeconge,QString idpersonel);


        QSqlQueryModel *afficherConge();
         QSqlQueryModel *test();
         bool ajouterConge();
         void supprimerConge();
           void modifierconge();
           QSqlQueryModel* chercherConge();


         //setters
         void settypeconge(QString);
        void settidconge(int idcong);
QString test2();
private:
    int idconge;
    QDate datedebut;
    QDate datefin;
    QString typeconge;
    QString idpersonel;
};

#endif // CONGE_H
