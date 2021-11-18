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
//gestion des  personnels
    void on_renitialiser_clicked();

    void on_ajouter_clicked();

    void on_afficher_clicked();

    void on_supprimer_clicked();

  void on_modifierPersonnel_clicked();




//gestions  des  congés

    void on_chercher_clicked();

    void on_ajouterconge_clicked();

    void on_afficherConge_clicked();



    void on_supprimerConge_clicked();

    void on_modifierconge_clicked();

    void on_chercherConge_clicked();



    void on_affichersalaire_2_clicked();

    void on_calcul_clicked();

    void on_trier_clicked();

    void on_trier_2_clicked();



    void on_trier_3_clicked();

    void on_affichermail_clicked();

    void on_impressionpdf_clicked();



    void on_table1_activated(const QModelIndex &index);

    void on_congetable_activated(const QModelIndex &index);

    void on_tabemail_activated(const QModelIndex &index);

    void on_impressionpdf_2_clicked();



    void on_impressionpdf_3_clicked();

private:
    Ui::MainWindow *ui;
};

#endif // MAINWINDOW_H
