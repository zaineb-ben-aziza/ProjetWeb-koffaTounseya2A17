#include "login.h"
#include "ui_login.h"
#include<QMessageBox>
#include<QPixmap>
login::login(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::login)
{
    ui->setupUi(this);

    QPixmap pix1("C:/Users/user/Documents/maquetteQT/violet.jpg");

 ui->label_4->setPixmap(pix1.scaled(900,900,Qt::KeepAspectRatio));
}

login::~login()
{
    delete ui;
}




void login::on_ajouter_clicked()
{
    QString username=ui->user->text();
     QString password=ui->password->text();
     if(username=="admin" &&  password=="admin")
     {


main=new MainWindow(this);
main->show();

l=new login(this);
l->hide();
     }
     else
          QMessageBox::critical(this,"failed!","username and  password is not correct");
}
