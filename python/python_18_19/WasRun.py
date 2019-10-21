from TestCase import *

class WasRun(TestCase):
	"""docstring for ClassName"""
	def __init__(self, name):
		print "we instantiate WasRun"
		self.wasSetUp = None
		TestCase.__init__(self, name)

	def setUp(self):
		print "setUp WasRun"
		self.wasRun = None
		self.log= self.log + "testMethod "

	def tearDown(self):
		print."tearDown"
		self.log = self.log + "tearDown"

	def testMethod(self):
		print "testMethod"
