#include "mainwindow.h"
#include "login.h"
#include <QApplication>
#include <QMessageBox>
#include "connectioncpp.h"
#include<iostream>
#include<QDialog>

int main(int argc, char *argv[])
{

    QApplication a(argc, argv);
    Connection c;
     bool test=c.createconnect();

    login w;


    QMessageBox msgBox;

    if(test)
    {
        w.show();
        msgBox.setWindowTitle("connection avec succee");
        msgBox.setText("connection effectue");

        return a.exec();
    }

else
    {
        msgBox.setWindowTitle("probleme");
        msgBox.setText("connection echoue");
        return a.exec();
    }

}




