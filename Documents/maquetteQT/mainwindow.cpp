#include "mainwindow.h"
#include "ui_mainwindow.h"
#include<QPixmap>

MainWindow::MainWindow(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::MainWindow)
{
    ui->setupUi(this);
   // inserer  une  image

    QPixmap pix2("C:/Users/user/Documents/maquetteQT/violet.jpg");
    QPixmap pix3("C:/Users/user/Documents/maquetteQT/violet.jpg");
    QPixmap pix4("C:/Users/user/Documents/maquetteQT/y.png");
// QPixmap pix5("C:/Users/user/Documents/maquetteQT/mod.png");

      QPixmap pix6("C:/Users/user/Documents/maquetteQT/violet.jpg");
      QPixmap pix7("C:/Users/user/Documents/maquetteQT/violet.jpg");
      QPixmap pix8("C:/Users/user/Documents/maquetteQT/violet.jpg");
 QPixmap pix9("C:/Users/user/Documents/maquetteQT/y.png");

     ui->label_13->setPixmap(pix2.scaled(900,1000,Qt::KeepAspectRatio));
 ui->label_15->setPixmap(pix3.scaled(900,1000,Qt::KeepAspectRatio));
  ui->label_19->setPixmap(pix4.scaled(100,150,Qt::KeepAspectRatio));
    //ui->label_22->setPixmap(pix5.scaled(100,70,Qt::KeepAspectRatio));

  ui->label_4->setPixmap(pix6.scaled(900,800,Qt::KeepAspectRatio));
  ui->label_52->setPixmap(pix7.scaled(900,800,Qt::KeepAspectRatio));
  ui->label_53->setPixmap(pix8.scaled(900,800,Qt::KeepAspectRatio));
    ui->label_25->setPixmap(pix9.scaled(100,150,Qt::KeepAspectRatio));

}

MainWindow::~MainWindow()
{
    delete ui;
}

