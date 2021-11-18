#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "connection.h"
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

//pdf
#include <QTextDocument>
#include <QtPrintSupport/QPrinter>
#include<QPrintDialog>
#include <QPrinter>

//email
#include<QDesktopServices>
#include<QUrl>




#include <QPrinter>
MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    conge c ;
    ui->setupUi(this);
    ui->id->setValidator(new QIntValidator(100,9999,this));
       ui->idconge->setValidator(new QIntValidator(100,9999,this));
       ui->numtel->setValidator(new QIntValidator(100,9999,this));
       ui->cin->setValidator(new QIntValidator(100,9999,this));
       ui->sal->setValidator(new QIntValidator(100,9999,this));


    ui->comboBox_2->setModel(c.test());


    //des images
            QPixmap pix3("C:/Users/user/Documents/maquetteQT/y.png");
             QPixmap pix10("C:/Users/user/Documents/maquetteQT/violet.jpg");
            QPixmap pix4("C:/Users/user/Documents/maquetteQT/y.png");
              QPixmap pix5("C:/Users/user/Documents/maquetteQT/iii.png");
              QPixmap pix6("C:/Users/user/Documents/maquetteQT/violet.jpg");
              QPixmap pix8("C:/Users/user/Documents/maquetteQT/violet.jpg");
             QPixmap pix9("C:/Users/user/Documents/maquetteQT/y.png");
            QPixmap pix11("C:/Users/user/Documents/maquetteQT/a.jpg");
            QPixmap pix12("C:/Users/user/Documents/maquetteQT/violet.jpg");
               QPixmap pix13("C:/Users/user/Documents/maquetteQT/violet.jpg");
                QPixmap pix18("C:/Users/user/Documents/maquetteQT/y.png");

             ui->label_25->setPixmap(pix3.scaled(100,150,Qt::KeepAspectRatio));
            ui->label_20->setPixmap(pix10.scaled(1200,1000,Qt::KeepAspectRatio));
              ui->label_23->setPixmap(pix4.scaled(100,150,Qt::KeepAspectRatio));
             ui->label_12->setPixmap(pix12.scaled(1200,1000,Qt::KeepAspectRatio));
              ui->label_21->setPixmap(pix6.scaled(1200,1000,Qt::KeepAspectRatio));
              ui->label_33->setPixmap(pix8.scaled(1200,1000,Qt::KeepAspectRatio));
                ui->label_40->setPixmap(pix9.scaled(100,150,Qt::KeepAspectRatio));
                ui->label_41->setPixmap(pix13.scaled(1200,1000,Qt::KeepAspectRatio));
                 ui->label_47->setPixmap(pix18.scaled(100,150,Qt::KeepAspectRatio));

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
       personnel p(id,ui->nmpr->text(),ui->fn->currentText(),ui->numtel->text(),ui->ville->text(),ui->cin->text(),ui->adrm->text(),ui->adr->text(),ui->datenais->date(),salaire,ui->etat1->currentText());
    if (p.ajouter())
    {
        QMessageBox::information(this,"Ajouter","Ajout avec  succeés !");
 ui->table1->setModel(p.afficher());
    }
    else
     QMessageBox::critical(this,"Ajouter","Probléme d'ajout !");


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
    if (p.test()!="")
    {
        p.setid(ui->id->text().toInt());
        p.supprimer();
        ui->table1->setModel(p.afficher());
        QMessageBox::information(this,"supprimer","supression avec succes !");
       }
    else
    {
        QMessageBox::critical(this,"Erreur"," cette identifiant n'existe pas !");
    }


}


//appel a fonction modifier personnel
void MainWindow::on_modifierPersonnel_clicked()
{

    int id=ui->id->text().toInt();
     float salaire=ui->sal->text().toFloat();
        personnel p(id,ui->nmpr->text(),ui->fn->currentText(),ui->numtel->text(),ui->ville->text(),ui->cin->text(),ui->adrm->text(),ui->adr->text(),ui->datenais->date(),salaire,ui->etat1->currentText());

        if (p.test()!="")
        {
             QMessageBox::information(this,"Modifier","Modification avec succes !");
         p.modifierPersonnel();
         ui->table1->setModel(p.afficher());
        }
        else
        {
             QMessageBox::critical(this,"Erreur"," cette identifiant n'existe pas !");
        }

}



//appel chercher  personnel
void MainWindow::on_chercher_clicked()
{
    personnel p;

        p.setid(ui->id->text().toInt());
        if (p.test()!="")
        {
            QMessageBox::information(this,"Recherche","Recherche Termine avec succes!");
          ui->table1->setModel(p.chercher());

        }
        else
        {
            QMessageBox::critical(this,"Erreur"," cette identifiant n'existe pas !");
        }


}

//renitialiser personnel
void MainWindow::on_renitialiser_clicked()
{


        ui->id->setText("");
        ui->nmpr->setText("");

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

    int id=ui->idconge->text().toInt();
    conge c(id,ui->datedeb->date(),ui->datefin->date(),"",ui->comboBox_2->currentText());


    if (ui->comboBox->currentIndex()!=0)
    c.settypeconge(ui->comboBox->currentText());


     if (c.ajouterConge())
     {

         QMessageBox::information(this,"Ajouter"," Ajout avec succees !");
         ui->congetable->setModel(c.afficherConge());

     }
     else
     {
          QMessageBox::critical(this,"Erreur"," Probleme d'ajout !");
     }
}



//bouton affichage  conge
void MainWindow::on_afficherConge_clicked()
{
    conge c;
        ui->congetable->setModel(c.afficherConge());
        ui->comboBox_2->setModel(c.test());

}




//supprimer un conge
void MainWindow::on_supprimerConge_clicked()
{
    conge c;
    c.settidconge(ui->idconge->text().toInt());

   if (c.test2()!="")
   {
         QMessageBox::information(this,"supprimer"," Suppression avec  succees !");
        c.settidconge(ui->idconge->text().toInt());
        c.supprimerConge();
        ui->congetable->setModel(c.afficherConge());
   }
   else
         QMessageBox::critical(this,"Erreur"," cette identifiant n'existe pas !");

}


//modifier  la liste des  conges
void MainWindow::on_modifierconge_clicked()
{

    int idconge=ui->idconge->text().toInt();
        conge c(idconge,ui->datedeb->date(),ui->datefin->date(),ui->comboBox->currentText(),ui->comboBox_2->currentText());

        if (c.test2()!="")
        {
             QMessageBox::information(this,"modifier"," Modification avc succées !");
             c.settidconge(ui->idconge->text().toInt());
             c.modifierconge();
             ui->congetable->setModel(c.afficherConge());
        }
        else
             QMessageBox::critical(this,"Erreur"," cette identifiant n'existe pas !");
}

//chercher  un conge

void MainWindow::on_chercherConge_clicked()
{

        conge c;

               c.settidconge(ui->idconge->text().toInt());
               if (c.test2()!="")
               {
                     QMessageBox::information(this,"chercher"," Recherche Terminer avec succees !");
                 ui->congetable->setModel(c.chercherConge());

               }
               else
               {
                    QMessageBox::critical(this,"Erreur"," cette identifiant n'existe pas !");
               }


}


//GESTION DES  SALAIRES
void MainWindow::on_affichersalaire_2_clicked()
{
    personnel p;
        ui->tablesalaire->setModel(p.afficher_Salaire());
}

//CALCUL SOMME  SALAIRE
void MainWindow::on_calcul_clicked()
{
    personnel p;
        ui->tablesalaire_2->setModel(p.calcul_somme_salaire());
}


//TRI ASC
void MainWindow::on_trier_clicked()
{
    personnel p;
        ui->tablesalaire_4->setModel(p.tri_asc_salaire());
}

//TRI DESC
void MainWindow::on_trier_2_clicked()
{
    personnel p;
        ui->tablesalaire_4->setModel(p.tri_desc_salaire());
}



void MainWindow::on_trier_3_clicked()
{
    QString link="https://mail.google.com/mail/u/3/?zx=56xdvqhg2t74#inbox?compose=new";
    QDesktopServices::openUrl(QUrl(link));
}

void MainWindow::on_affichermail_clicked()
{
    personnel p;
        ui->tabemail->setModel(p.afficherEmail());
}









//click sur id  pour  afficher  tout  les donnees  du table Personnel
void MainWindow::on_table1_activated(const QModelIndex &index)
{
   QString val=ui->table1->model()->data(index).toString();
   QSqlQuery qry;
   qry.prepare("select * from personnel where idp='"+val+"' ");
if(qry.exec())
{
    while(qry.next())
    {
        ui->id->setText(qry.value(0).toString());
         ui->nmpr->setText(qry.value(1).toString());
          ui->fn->setCurrentText(qry.value(2).toString());
           ui->numtel->setText(qry.value(3).toString());
            ui->adrm->setText(qry.value(4).toString());
            ui->ville->setText(qry.value(5).toString());
            ui->adr->setText(qry.value(6).toString());
            ui->cin->setText(qry.value(7).toString());
            ui->datenais->setDate(qry.value(8).toDate());
            ui->sal->setText(qry.value(9).toString());
ui->etat1-> setCurrentText (qry.value (10) .toString ());

    }
}
else
{
    QMessageBox::information(this,"Error","try to double click sur ID!");
}
}



//click sur  id conge afficher  toute  les donners  du table conge
void MainWindow::on_congetable_activated(const QModelIndex &index)
{
    QString val1=ui->congetable->model()->data(index).toString();
    QSqlQuery qry;
    qry.prepare("select * from conge where idconge='"+val1+"' ");
 if(qry.exec())
 {
     while(qry.next())
     {
         ui->idconge->setText(qry.value(0).toString());
           ui->datedeb->setDate(qry.value(1).toDate());
           ui->datefin->setDate(qry.value(2).toDate());
            ui->comboBox-> setCurrentText (qry.value (3) .toString ());
              ui->comboBox_2-> setCurrentText (qry.value (4) .toString ());
        }
 }

     else
     {
         QMessageBox::information(this,"Error","try to double click sur ID!");
     }
 }

//mail
void MainWindow::on_tabemail_activated(const QModelIndex &index)
{
    QString val=ui->tabemail->model()->data(index).toString();
    QSqlQuery qry;
    qry.prepare("select idp,salaire,etat from personnel where email='"+val+"' ");
 if(qry.exec())
 {
     while(qry.next())
     {
         ui->lineEdit_2->setText(qry.value(0).toString());

             ui->lineEdit->setText(qry.value(1).toString());
 ui->etat1_3-> setCurrentText (qry.value (2) .toString ());

     }
 }
 else
 {
     QMessageBox::information(this,"Error","try to double click sur ID!");
 }
}

//imprerssion pdf bouton personnel
void MainWindow::on_impressionpdf_clicked()
{

    QString strStream;
                QTextStream out(&strStream);



                const int rowCount = ui->table1->model()->rowCount();
                const int columnCount = ui->table1->model()->columnCount();

                out <<  "<html>\n"
                    "<head>\n"

                    "<meta Content=\"Text/html; charset=Windows-1251\">\n"
                    <<  QString("<title>%60 les postes</title>\n").arg("poste")
                    <<  "</head>\n"
                    "<body bgcolor=#ffffff link=#5000A0>\n"
                    "<table border=1 cellspacing=0 cellpadding=2>\n";
                out << "<thead><tr bgcolor=#f0f0f0>";

                for (int column = 0; column < columnCount; column++)
                    if (! ui->table1->isColumnHidden(column))
                        out << QString("<th>%1</th>").arg(ui->table1->model()->headerData(column, Qt::Horizontal).toString());
                out << "</tr></thead>\n";

                for (int row = 0; row < rowCount; row++) {
                    out << "<tr>";
                    for (int column = 0; column < columnCount; column++) {
                        if (!ui->table1->isColumnHidden(column)) {
                            QString data = ui->table1->model()->data(ui->table1->model()->index(row, column)).toString().simplified();
                            out << QString("<td bkcolor=0>%1</td>").arg((!data.isEmpty()) ? data : QString("&nbsp;"));
                        }
                    }
                    out << "</tr>\n";
                }
                out <<  "</table>\n"
                    "</body>\n"
                    "</html>\n";

                QTextDocument *document = new QTextDocument();
                document->setHtml(strStream);

                QPrinter printer;

                QPrintDialog *dialog = new QPrintDialog(&printer, NULL);
                if (dialog->exec() == QDialog::Accepted) {
                    document->print(&printer);
                }

                delete document;
}


//imprerssion pdf bouton conge
void MainWindow::on_impressionpdf_2_clicked()
{
    QString strStream;
                QTextStream out(&strStream);



                const int rowCount = ui->congetable->model()->rowCount();
                const int columnCount = ui->congetable->model()->columnCount();

                out <<  "<html>\n"
                    "<head>\n"

                    "<meta Content=\"Text/html; charset=Windows-1251\">\n"
                    <<  QString("<title>%60 les postes</title>\n").arg("poste")
                    <<  "</head>\n"
                    "<body bgcolor=#ffffff link=#5000A0>\n"
                    "<table border=1 cellspacing=0 cellpadding=2>\n";
                out << "<thead><tr bgcolor=#f0f0f0>";

                for (int column = 0; column < columnCount; column++)
                    if (! ui->congetable->isColumnHidden(column))
                        out << QString("<th>%1</th>").arg(ui->congetable->model()->headerData(column, Qt::Horizontal).toString());
                out << "</tr></thead>\n";

                for (int row = 0; row < rowCount; row++) {
                    out << "<tr>";
                    for (int column = 0; column < columnCount; column++) {
                        if (!ui->congetable->isColumnHidden(column)) {
                            QString data = ui->congetable->model()->data(ui->congetable->model()->index(row, column)).toString().simplified();
                            out << QString("<td bkcolor=0>%1</td>").arg((!data.isEmpty()) ? data : QString("&nbsp;"));
                        }
                    }
                    out << "</tr>\n";
                }
                out <<  "</table>\n"
                    "</body>\n"
                    "</html>\n";

                QTextDocument *document = new QTextDocument();
                document->setHtml(strStream);

                QPrinter printer;

                QPrintDialog *dialog = new QPrintDialog(&printer, NULL);
                if (dialog->exec() == QDialog::Accepted) {
                    document->print(&printer);
                }

                delete document;
}


//impression pdf  salaire  avec tri
void MainWindow::on_impressionpdf_3_clicked()
{
    QString strStream;
                QTextStream out(&strStream);



                const int rowCount = ui->tablesalaire_4->model()->rowCount();
                const int columnCount = ui->tablesalaire_4->model()->columnCount();

                out <<  "<html>\n"
                    "<head>\n"

                    "<meta Content=\"Text/html; charset=Windows-1251\">\n"
                    <<  QString("<title>%60 les postes</title>\n").arg("poste")
                    <<  "</head>\n"
                    "<body bgcolor=#ffffff link=#5000A0>\n"
                    "<table border=1 cellspacing=0 cellpadding=2>\n";
                out << "<thead><tr bgcolor=#f0f0f0>";

                for (int column = 0; column < columnCount; column++)
                    if (! ui->tablesalaire_4->isColumnHidden(column))
                        out << QString("<th>%1</th>").arg(ui->tablesalaire_4->model()->headerData(column, Qt::Horizontal).toString());
                out << "</tr></thead>\n";

                for (int row = 0; row < rowCount; row++) {
                    out << "<tr>";
                    for (int column = 0; column < columnCount; column++) {
                        if (!ui->tablesalaire_4->isColumnHidden(column)) {
                            QString data = ui->tablesalaire_4->model()->data(ui->tablesalaire_4->model()->index(row, column)).toString().simplified();
                            out << QString("<td bkcolor=0>%1</td>").arg((!data.isEmpty()) ? data : QString("&nbsp;"));
                        }
                    }
                    out << "</tr>\n";
                }
                out <<  "</table>\n"
                    "</body>\n"
                    "</html>\n";

                QTextDocument *document = new QTextDocument();
                document->setHtml(strStream);

                QPrinter printer;

                QPrintDialog *dialog = new QPrintDialog(&printer, NULL);
                if (dialog->exec() == QDialog::Accepted) {
                    document->print(&printer);
                }

                delete document;
}
