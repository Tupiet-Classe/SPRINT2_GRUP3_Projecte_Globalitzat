from kivy.lang import Builder
from kivymd.app import MDApp
from kivymd.uix.boxlayout import MDBoxLayout
from kivymd.theming import ThemableBehavior
from kivymd.uix.list import MDList
from kivymd.uix.list import OneLineIconListItem
from kivy.uix.scrollview import ScrollView
from kivy.core.window import Window
from kivy.utils import platform
from kivymd.uix.screen import MDScreen
from kivy.properties import ObjectProperty
from kivymd.uix.scrollview import MDScrollView
from kivy.clock import Clock
from kivymd.uix.list import ThreeLineIconListItem, IconLeftWidget #import para crear listas (cambia dependiendo de los campos que queremos que tenga la lista), le pasamos diferentes imports de la misma biblioteca


class ContentNavigationDrawer(MDBoxLayout):
    manager = ObjectProperty()
    nav_drawer = ObjectProperty()  

class DrawerList(ThemableBehavior, MDList):
    def set_color_item(self, instance_item):

        # Set the color of the icon and text for the menu item.
        for item in self.children:
            if item.text_color == self.theme_cls.primary_color:
                item.text_color = self.theme_cls.text_color
                break
        instance_item.text_color = self.theme_cls.primary_color
        

class MyApp (MDApp):    
    def build(self):
        self.title = "PymeShield"
        Window.size = (400, 600)
        scroll = ScrollView()
        
        list_view = MDList()
        for i in range(20):

            items = OneLineIconListItem(text=str(i) + ' item')
            list_view.add_widget(items)

        scroll.add_widget(list_view)
        return Builder.load_file("main2.kv")##el estil
    
    def on_start(self): #ccrem la classe on_start
        for i in range(10): #bucle que recorre el rango que le pasemos como parametro
            self.root.ids.cursos.add_widget( #añade widgets, despues de ids. va el id con el que podremos trabajar en el documento .kv
                ThreeLineIconListItem( #método que nos deja trabajar con 3 lineas que previamente lo hemos importado en la parte superior
                    IconLeftWidget( #un metode que ens permeteix agregar icones
                        icon="school"
                    ),
                    text=f"Curso {i}", 
                    secondary_text=f"Tema {i}", 
                )
                
            )## Llistara lo que posa en Cursos
    
        for i in range(10):
            self.root.ids.emblemas.add_widget(
                ThreeLineIconListItem(
                    IconLeftWidget(
                        icon="medal"
                    ),
                    text=f"#{i}",
                    secondary_text=f"Curso {i}",
                    tertiary_text=f"Completa el curso {i}",
                    
                )
            )##Llistara lo que posa en Emblemas   
            
      
MyApp().run()
