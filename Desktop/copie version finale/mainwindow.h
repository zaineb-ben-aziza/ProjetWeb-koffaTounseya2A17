#ifndef MAINWINDOW_H
#define MAINWINDOW_H
#include"arduino.h"
#include <QMainWindow>

namespace Ui {
class MainWindow;
}

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindow(QWidget *parent = nullptr);
    ~MainWindow();
     arduino a;

private slots:
    void on_menuBouton_Gestionpersonnels_clicked();


    void update_label();

private:
    Ui::MainWindow *ui;

};

#endif // MAINWINDOW_H
