#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "connection.h"
#include <iostream>
#include <QApplication>
#include <QDialog>
#include <QWidget>
#include <QPushButton>
#include <QMessageBox>
#include <QSqlQueryModel>
#include<QPixmap>

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);

    QPixmap pix3("C:/Users/user/Documents/maquetteQT/violet.jpg");
    QPixmap pix4("C:/Users/user/Documents/maquetteQT/y.png");
QPixmap pix5("C:/Users/user/Documents/maquetteQT/violet.jpg");

      QPixmap pix6("C:/Users/user/Documents/maquetteQT/violet.jpg");
      QPixmap pix7("C:/Users/user/Documents/maquetteQT/violet.jpg");
      QPixmap pix8("C:/Users/user/Documents/maquetteQT/violet.jpg");
 QPixmap pix9("C:/Users/user/Documents/maquetteQT/y.png");

 ui->label_15->setPixmap(pix3.scaled(900,1000,Qt::KeepAspectRatio));
  ui->label_19->setPixmap(pix4.scaled(100,150,Qt::KeepAspectRatio));
    ui->label_2->setPixmap(pix5.scaled(900,1000,Qt::KeepAspectRatio));

  ui->label_4->setPixmap(pix6.scaled(900,800,Qt::KeepAspectRatio));
  ui->label_52->setPixmap(pix7.scaled(900,800,Qt::KeepAspectRatio));
  ui->label_53->setPixmap(pix8.scaled(900,800,Qt::KeepAspectRatio));
    ui->label_25->setPixmap(pix9.scaled(100,150,Qt::KeepAspectRatio));

}



MainWindow::~MainWindow()
{
    delete ui;
}






//Afficher la  liste  des  personnels
void MainWindow::on_afficher_clicked()
{

    QSqlQuery query(QSqlDatabase::database("test-db"));
    QSqlQueryModel *model=new QSqlQueryModel() ;
    query.prepare(QString("Select * from personnel"));
    query.exec();
    model->setQuery(query);
    ui->tableView->setModel(model);


}


//ajouter un personel
void MainWindow::on_ajouter_clicked()
{
        QString id,NOM_PR,FONCTIONNALITE,NUMTEL,EMAIL,ville,adresse,cin,DATEDENAISSANCE,salaire;

            id=ui->id->text();
            NOM_PR=ui->nmpr->text();
           FONCTIONNALITE=ui->fn->text();
            NUMTEL=ui->numtel->text();
            EMAIL=ui->adrm->text();
            ville=ui->ville->text();
            adresse=ui->adr->text();
            cin=ui->cin->text();
            DATEDENAISSANCE=ui->datenais->text();
            salaire=ui->sal->text();
            QSqlQuery query(QSqlDatabase::database("test-db"));
            query.prepare(QString("insert into PERSONNEL values ('"+id+"','"+NOM_PR+"','"+FONCTIONNALITE+"','"+NUMTEL+"','"+EMAIL+"','"+ville+"','"+adresse+"','"+cin+"','"+DATEDENAISSANCE+"','"+salaire+"')"));
            query.exec();
    }


//supprimer un personnel
void MainWindow::on_supprimer_clicked()
{
    //supprission par id
    QString id;
        id=ui->idpers->text();

        QSqlQuery query(QSqlDatabase::database("test-db"));
        query.prepare(QString("DELETE from personnel where id='"+id+"'"));
        query.exec();
}


//Modifier un personnel

//void MainWindow::on_modifier_clicked()
//{
    //QString idof,nvid;
       // idof=ui->idof->text();
       // nvid=ui->nvid->text();
       // QSqlQuery query(QSqlDatabase::database("test-db"));
        //query.prepare(QString("update personnel set id='"+nvid+"' where id='"+idof+"'"));
        //query.exec();
//}



//chercher  un personnel par son id
void MainWindow::on_chercher_clicked()
{
    QString id;
        id=ui->idcherch->text();
    QSqlQuery query(QSqlDatabase::database("test-db"));
    QSqlQueryModel *model=new QSqlQueryModel() ;
    query.prepare(QString("Select id,nom_prenom,fonctionnalite,numtel,email,ville,adresse,cin,datedenaissance,salaire from personnel where id='"+id+"'"));
    query.exec();
    model->setQuery(query);
    ui->tableView_3->setModel(model);
}

//affichage  de la grille des salaires
void MainWindow::on_affichersalaire_clicked()
{

    QSqlQuery query(QSqlDatabase::database("test-db"));
    QSqlQueryModel *model=new QSqlQueryModel() ;
    query.prepare(QString("Select id,nom_prenom,salaire from personnel"));
    query.exec();
    model->setQuery(query);
    ui->tableView_4->setModel(model);
}

//modifier un personnel
void MainWindow::on_modifier_clicked()
{
    QString idmodif;
        idmodif=ui->idmodif->text();
    QSqlQuery query(QSqlDatabase::database("test-db"));
    QSqlQueryModel *model=new QSqlQueryModel() ;

    query.prepare(QString("Select nom_prenom,ville,salaire from personnel where  id='"+idmodif+"'"));
    query.exec();

    model->setQuery(query);
    ui->combo1->setModel(model);

}

//reset ajout personnel
void MainWindow::on_renitialiser_clicked()
{


        ui->id->setText("");
        ui->nmpr->setText("");
       ui->fn->setText("");
        ui->numtel->setText("");
        ui->adrm->setText("");
        ui->ville->setText("");
        ui->adr->setText("");
        ui->cin->setText("");
        ui->datenais->setText("");
        ui->sal->setText("");
}
//reset supprimer personnel
void MainWindow::on_renitialiser_2_clicked()
{
  ui->idpers->setText("");
}
