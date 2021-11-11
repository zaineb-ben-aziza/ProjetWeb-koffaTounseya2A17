#include "mainwindow.h"
#include <QApplication>
#include <QMessageBox>
#include "connection.h"
#include<iostream>


int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    Connection c;
     bool test=c.createconnect();
    MainWindow w;

    QMessageBox msgBox;

    if(test)
    {   w.show();
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
