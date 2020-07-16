from django.urls import include, path
from portfolio import views
 
app_name = 'portfolio'
 
urlpatterns = [
    path('contact_form',views.contact_form,name='contact_form'),
    path('about',views.about,name='about'),
    #Url for contact view
    path('contact',views.contact,name='contact'),
    #Url for Contact form submit view
    path('contact_form_submit',views.contact_form_submit,name='contact_form_submit'),
    #Url for all_data view
    path('all_data',views.all_data,name='all_data'),
]

