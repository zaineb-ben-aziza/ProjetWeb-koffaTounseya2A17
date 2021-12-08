#include "mainwindow.h"
#include "ui_mainwindow.h"
#include<QPixmap>
#include<QDebug>
#include<QSqlQuery>
#include "windowpersonnel.h"

#include"arduino.h"

MainWindow::MainWindow(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::MainWindow)
{
    ui->setupUi(this);
    switch(a.connect_arduino())
    {
        case (0):
            qDebug()<<"arduino is available and connected to"<<a.getarduino_port_name();
        break;
        case (1):
            qDebug()<<"arduino is available but not connected to"<<a.getarduino_port_name();
        break;
        case (-1):
            qDebug()<<"arduino is not available";
        break;

    }
 QObject::connect(a.getserial(),SIGNAL(readyRead()),this,SLOT(update_label()));



   QPixmap pix1("C:/Users/user/Documents/maquetteQT/violet.jpg");
ui->label_3->setPixmap(pix1.scaled(1000,900,Qt::KeepAspectRatio));
}

MainWindow::~MainWindow()
{
    delete ui;
}


//BOUTON GESTION DES PERSONNELS
void MainWindow::on_menuBouton_Gestionpersonnels_clicked()
{


    windowpersonnel p;
    p.setModal(true);

    p.exec();

}



void MainWindow::update_label()
{
 QByteArray sr=a.read_from_arduino();
 QString ch=QString::fromStdString(sr.toStdString());
  qDebug()<<ch.left(1);
if(ch.left(1)=="o")
{
    QSqlQuery query;

         query.prepare("update ENTRER_PERSONNEL  set nbr_pr_entrer=nbr_pr_entrer+1 ");
          query.exec();
}
}


