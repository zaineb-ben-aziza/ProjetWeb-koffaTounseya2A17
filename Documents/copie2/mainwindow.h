#ifndef MAINWINDOW_H
#define MAINWINDOW_H

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

private slots:
//affiche
    void on_afficher_clicked();

//supprimer
    void on_supprimer_clicked();
//modifier
    //void on_modifier_clicked();


    void on_ajouter_clicked();



    void on_chercher_clicked();

    void on_affichersalaire_clicked();

    void on_modifier_clicked();

    void on_renitialiser_clicked();

    void on_renitialiser_2_clicked();

private:
    Ui::MainWindow *ui;
};

#endif // MAINWINDOW_H
