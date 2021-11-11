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
#include "personnel.h"
#include"conge.h"
#include<QDate>
MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    conge c ;
    ui->setupUi(this);
    ui->comboBox_2->setModel(c.test());


    //des images
        QPixmap pix3("C:/Users/user/Documents/maquetteQT/y.png");
         QPixmap pix10("C:/Users/user/Documents/maquetteQT/violet.jpg");
        QPixmap pix4("C:/Users/user/Documents/maquetteQT/y.png");
          QPixmap pix5("C:/Users/user/Documents/maquetteQT/iii.png");
          QPixmap pix6("C:/Users/user/Documents/maquetteQT/violet.jpg");
          QPixmap pix7("C:/Users/user/Documents/maquetteQT/violet.jpg");
          QPixmap pix8("C:/Users/user/Documents/maquetteQT/violet.jpg");
         QPixmap pix9("C:/Users/user/Documents/maquetteQT/y.png");
        QPixmap pix11("C:/Users/user/Documents/maquetteQT/a.jpg");
         ui->label_25->setPixmap(pix3.scaled(100,150,Qt::KeepAspectRatio));
        ui->label_20->setPixmap(pix10.scaled(1200,1000,Qt::KeepAspectRatio));
          ui->label_23->setPixmap(pix4.scaled(100,150,Qt::KeepAspectRatio));
         // ui->label_35->setPixmap(pix11.scaled(1200,1000,Qt::KeepAspectRatio));

          ui->label_21->setPixmap(pix6.scaled(1200,1000,Qt::KeepAspectRatio));
          ui->label_52->setPixmap(pix7.scaled(900,800,Qt::KeepAspectRatio));
          ui->label_33->setPixmap(pix8.scaled(1200,1000,Qt::KeepAspectRatio));
            //ui->label_25->setPixmap(pix9.scaled(100,150,Qt::KeepAspectRatio));

}



MainWindow::~MainWindow()
{
    delete ui;
}




// appel a fonction ajouter personnel
void MainWindow::on_ajouter_clicked()
{
    int id=ui->id->text().toInt();
    float salaire=ui->sal->text().toFloat();
       personnel p(id,ui->nmpr->text(),ui->fn->text(),ui->numtel->text(),ui->ville->text(),ui->cin->text(),ui->adrm->text(),ui->adr->text(),ui->datenais->date(),salaire,ui->etat1->currentText());
    p.ajouter();
 ui->table1->setModel(p.afficher());

}


//appel a fonction afficher personnel
void MainWindow::on_afficher_clicked()
{
    personnel p;
        ui->table1->setModel(p.afficher());
}


//appel a fonction supprimer personnel
void MainWindow::on_supprimer_clicked()
{
    personnel p;
        p.setid(ui->id->text().toInt());
        p.supprimer();
        ui->table1->setModel(p.afficher());
}


//appel a fonction modifier personnel
void MainWindow::on_modifierPersonnel_clicked()
{
    int id=ui->id->text().toInt();
     int salaire=ui->sal->text().toInt();
        personnel p(id,ui->nmpr->text(),ui->fn->text(),ui->numtel->text(),ui->ville->text(),ui->cin->text(),ui->adrm->text(),ui->adr->text(),ui->datenais->date(),salaire,ui->etat1->currentText());

        p.modifierPersonnel();

         ui->table1->setModel(p.afficher());

}



//appel chercher  personnel
void MainWindow::on_chercher_clicked()
{
    personnel p;
        p.setid(ui->id->text().toInt());
        ui->table1->setModel(p.chercher());
}

//renitialiser personnel
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

        ui->sal->setText("");
}

//_________________________________________________________________________________________________________________________________________________________________________________________________________________

//bouton ajouter conge
void MainWindow::on_ajouterconge_clicked()
{
    QMessageBox msgBox;
    int id=ui->idconge->text().toInt();
    conge c(id,ui->datedeb->date(),ui->datefin->date(),"",ui->comboBox_2->currentText());


    if (ui->comboBox->currentIndex()!=0)
    c.settypeconge(ui->comboBox->currentText());


     if (c.ajouterConge())
     {

         msgBox.setText("ajout avec  succes");
         ui->congetable->setModel(c.afficherConge());
         msgBox.exec();
     }
     else
     {
         msgBox.setText("ajout avec  non succes");
         msgBox.exec();
     }
}



//bouton affichage  conge
void MainWindow::on_afficherConge_clicked()
{
    conge c;
        ui->congetable->setModel(c.afficherConge());
        ui->comboBox_2->setModel(c.test());

}


//bouton renitialiser conge
void MainWindow::on_renitialiser_conge_clicked()
{
    ui->idconge->setText("");

}


//supprimer un conge
void MainWindow::on_supprimerConge_clicked()
{
    conge c;
        c.settidconge(ui->idconge->text().toInt());
        c.supprimerConge();
        ui->congetable->setModel(c.afficherConge());
}


//modifier  la liste des  conges
void MainWindow::on_modifierconge_clicked()
{
    int idconge=ui->idconge->text().toInt();
        conge c(idconge,ui->datedeb->date(),ui->datefin->date(),ui->comboBox->currentText(),ui->comboBox_2->currentText());

        c.modifierconge();

         ui->congetable->setModel(c.afficherConge());
}

//chercher  un conge


void MainWindow::on_chercherConge_clicked()
{

        conge c;
            c.settidconge(ui->idconge->text().toInt());
            ui->congetable->setModel(c.chercherConge());

}
